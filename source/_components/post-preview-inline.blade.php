{{--<div class="flex flex-col mb-4">--}}
{{--    <p class="text-gray-700 font-medium my-2">--}}
{{--        {{ $post->getDate()->format('F j, Y') }}--}}
{{--    </p>--}}

{{--    <h2 class="text-3xl mt-0">--}}
{{--        <a--}}
{{--            href="{{ $post->getUrl() }}"--}}
{{--            title="Read more - {{ $post->title }}"--}}
{{--            class="text-gray-900 font-extrabold"--}}
{{--        >{{ $post->title }}</a>--}}
{{--    </h2>--}}

{{--    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>--}}

{{--    <a--}}
{{--        href="{{ $post->getUrl() }}"--}}
{{--        title="Read more - {{ $post->title }}"--}}
{{--        class="uppercase font-semibold tracking-wide mb-2"--}}
{{--    >Read</a>--}}
{{--</div>--}}
<div class="w-full mt-12 px-10 py-6 bg-white rounded-lg shadow-md">
    <div class="flex justify-between items-center">
                <span class="font-light text-gray-600">
                    {{ $post->getDate()->format('F j, Y') }}
                </span>
        <a href="#" class="px-2 py-1 bg-teal-400 text-gray-100 font-bold rounded hover:bg-teal-500 hover:text-white">Laravel</a>
    </div>
    <div class="mt-2">
        <a href="{{ $post->getUrl() }}" class="text-2xl text-gray-700 font-bold hover:text-gray-600">
            {{ $post->title }}
        </a>
        <p class="mt-2 text-gray-600">{!! $post->getExcerpt() !!}</p></div>
    <div class="flex justify-between items-center mt-4">

        <a href="{{ $post->getUrl() }}" class="hover:underline">Read more</a>
        <div class="flex items-center">
            <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                 alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
            <a href="#" class="text-lg text-gray-700 font-bold">{{ $post->authoe }}</a>
        </div>
    </div>
</div>