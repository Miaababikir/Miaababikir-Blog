---
extends: _layouts.post
section: content
title: Responsive navbar using Tailwind CSS and Vue js or Vanilla javascript
date: 2020-05-25
description: In this article I will walk you through how I make tailwind css navbar
featured: true
---

I saw a lot of people including me struggling with implementing navbar menu with hamburger button to toggle it on small screens. So I decided to make small article to help you with that.

On the left section we have two element (Site name, hamburger button), and we make the button hidden by default in `md` screens.

On the right section we make it hidden in `small` screens and make it `block` on `md` screens and `flex-col` on small screen and `flex-row` on `md` screen.

```html
<nav class="bg-white shadow">
	<div class="container px-6 py-3 mx-auto">
		<div class="md:flex justify-between items-center">
			<!-- left section -->
			<div class="flex justify-between items-center">
				<a href="#" class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">Brand</a>
				<div class="md:hidden">
					<button id="nav-button" type="button" class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none">
						<svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
							<path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
						</svg>	
					</button>
				</div>
			</div>
			<!-- right section -->
			<div id="nav-menu" class="flex flex-col mt-3 hidden md:flex-row md:mt-0 md:block">
				<a href="#" class="text-gray-800 text-sm hover:font-medium md:mx-4">Home</a>
				<a href="#" class="text-gray-800 text-sm hover:font-medium md:mx-4">Contact</a>
				<a href="#" class="text-gray-800 text-sm hover:font-medium md:mx-4">About Us</a>
			</div>
		</div>
	</div>
</nav>
```

And to make it togglable we can sprinkle little bit of javascript.

```jsx
let button = document.getElementById('nav-button');
let menu = document.getElementById('nav-menu');

button.addEventListener('click', () => {
	menu.classList.toggle("hidden");
});
```

If you are using Vue js you can toggle it this way

```html
<nav class="bg-white shadow" id="app">
	<div class="container px-6 py-3 mx-auto">
		<div class="md:flex justify-between items-center">
			<!-- left section -->
			<div class="flex justify-between items-center">
				<a href="#" class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-2xl">Brand</a>
				<div class="md:hidden">
					<button type="button" class="text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none" @click="isOpen = !isOpen">
						<svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
							<path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
						</svg>	
					</button>
				</div>
			</div>
			<!-- right section -->
			<div class="flex-col mt-3 md:flex-row md:mt-0 md:flex" :class="isOpen? 'flex' : 'hidden'">
				<a href="#" class="text-gray-800 text-sm hover:font-medium md:mx-4">Home</a>
				<a href="#" class="text-gray-800 text-sm hover:font-medium md:mx-4">Contact</a>
				<a href="#" class="text-gray-800 text-sm hover:font-medium md:mx-4">About Us</a>
			</div>
		</div>
	</div>
</nav>

<!-- For your vue instance -->

<script>
	const app = new Vue({
	  el: "#app",
	  data: {
	    isOpen: false
	  },
	});
</script>
```

And that is all, I wish it was helpful ^_^.