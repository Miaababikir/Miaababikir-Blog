@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}"/>
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/avatar.jpg"
         alt="About image"
         class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">Greetings! <strong>I’m Mosab Ibrahim</strong> 👨‍💻.</p>
    <p class="mb-6">I am software engineer. I spend my days building, designing, developing web applications, playing video games <code>mostly
            Minecraft 😆</code>, trying new technologies and mentoring
        beginners and motivated programmers in my collage.</p>
    <p class="mb-6">
        I love talking and geeking about programming and about what am building. And sharing programming goodness with
        the community <span class="text-red-400">❤️</span>.
    </p>
    <p class="mb-6">
        I love working with Laravel framework on the backend, Vue.js on the frontend and Tailwind CSS for
        styling. I love building new things and working on new side projects and engaging with our community 🤘.
    </p>

@endsection
