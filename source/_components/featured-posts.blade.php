<div class="section-bg">
    <div class="flex flex-wrap w-full container mx-auto">
        @foreach ($posts->where('featured', true)->take(3) as $featuredPost)
            <div class="flex flex-col w-full md:w-1/3 items-center justify-center px-4 py-32">
                <div class="max-w-lg py-4 px-8 bg-white shadow-lg rounded-lg hover:shadow-2xl bounce-sm">
                    <div class="flex justify-center md:justify-end -mt-16">
                        <img class="w-20 h-20 object-cover rounded-full border-2 border-teal-500"
                             src="{{ $featuredPost->avatar }}">
                    </div>
                    <div>
                        <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-800 text-2xl font-semibold">{{ $featuredPost->title }}</a>
                        <p class="mt-2 text-gray-600">{!! $featuredPost->getExcerpt() !!}</p>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="#" class="text-xl font-medium text-teal-500">{{ $featuredPost->author }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>