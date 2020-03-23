<div class="w-full mt-12 px-10 py-6 bg-white rounded-lg shadow-lg hover:shadow-2xl bounce-sm">
    <div class="flex justify-between items-center">
                <span class="font-light text-gray-600">
                    {{ $post->getDate()->format('F j, Y') }}
                </span>
    </div>
    <div class="mt-2">
        <a href="{{ $post->getUrl() }}" class="text-2xl text-gray-700 font-bold hover:text-gray-600">
            {{ $post->title }}
        </a>
        <p class="mt-2 text-gray-600">{!! $post->getExcerpt() !!}</p></div>
    <div class="flex justify-between items-center mt-4">

        <a href="{{ $post->getUrl() }}" class="hover:underline">Read more</a>
        <div class="flex items-center">
            <img src="{{ $post->avatar }}"
                 alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
            <a href="#" class="text-lg text-gray-700 font-bold">{{ $post->authoe }}</a>
        </div>
    </div>
</div>