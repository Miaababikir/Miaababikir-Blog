<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-700 hover:text-teal-400 {{ $page->isActive('/blog') ? 'active text-teal-400' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-gray-700 hover:text-teal-400 {{ $page->isActive('/about') ? 'active text-teal-400' : '' }}">
        About
    </a>

{{--    <a title="{{ $page->siteName }} Contact" href="/contact"--}}
{{--        class="ml-6 text-gray-700 hover:text-teal-400 {{ $page->isActive('/contact') ? 'active text-teal-400' : '' }}">--}}
{{--        Contact--}}
{{--    </a>--}}
</nav>
