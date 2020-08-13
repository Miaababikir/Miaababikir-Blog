---
extends: _layouts.post
section: content
title: Laravel sanctum multi authentication
date: 2020-08-13
description: In this article I will walk you through how to implement multi authentication using sanctum
---

I guess you noticed that there is no way that you can implement multi authentication with sanctum using auth guards, but I kida figured out some easy and simple way to implement that.


### Ok let's get started
After installing and setup sanctum, first you need to set up your auth model, suppose you have these two models **(Customer, Driver)**

### Customer model

```php
class Customer extends Authenticatable
{
    use HasApiTokens;
}
```

### Driver Model

```php
class Driver extends Authenticatable
{
    use HasApiTokens;
}
```

Then you need to make auth controller for each of them `(you can do that in one controller if you want)` .

```bash
php artisan make:controller API/Auth/CustomerAuthController
php artisan make:controller API/Auth/DriverAuthController
```

### Customer auth controller
The only new thing that you need to add is the ability when you create new token on the `createToken` method you pass the ability on the second parameter, I call it `role:customer`
```php
public function login(Request $request)
{
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $customer = Customer::where('email', $request->email)->first();

        if (!$customer || !Hash::check($request->password, $customer->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'customer' => $customer,
            'token' => $customer->createToken('mobile', ['role:customer'])->plainTextToken
        ]);

}
```

### Driver auth controller
Also, here you should add ability when creating the token I call it `role:driver` .
```php
public function login(Request $request)
{
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $driver = Driver::where('email', $request->email)->first();

        if (!$driver || !Hash::check($request->password, $driver->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'driver' => $driver,
            'token' => $driver->createToken('mobile', ['role:driver'])->plainTextToken
        ]);
}
```

### Setting middleware

After setting driver and customer login methods, you need to create middleware for each of them to prevent each of them from accessing other routes.

```bash
php artisan make:middleware CustomerMiddleware

php artisan make:middleware DriverMiddleware
```

Then on the customer middleware you need to check if has the `role:customer` ability or not, if it's not you will return not authorized and the same thing for driver middleware.

### Customer Middleware

```php
class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->tokenCan('role:customer')) {
            return $next($request);
        }

        return response()->json('Not Authorized', 401);

    }
}
```

### Driver Middleware

```php
class DriverMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user()->tokenCan('role:driver')) {
            return $next($request);
        }

        return response()->json('Not Authorized', 401);

    }
}
```

then you need to add these middlewares to your `$routeMiddleware` array at the end of  **Kernal.php** file**.**

```php
    'type.customer' => CustomerMiddleware::class,
    'type.driver' => DriverMiddleware::class,
```

At last you need to add these middleware to you route on `api.php` file.

### For example

```php
// Only for customers
Route::middleware(['auth:sanctum', 'type.customer'])->group(function () {
    Route::get('/customers/orders', 'API\Customers\OrderController@index');
});

// Only for drivers
Route::middleware(['auth:sanctum', 'type.driver'])->group(function () {
    Route::get('/drivers/orders', 'API\Drivers\OrderController@index');
});
```

That's all see ya next time :)