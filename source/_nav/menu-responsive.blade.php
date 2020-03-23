<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0 list-none">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-teal-400 {{ $page->isActive('/blog') ? 'active text-teal-400' : '' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-teal-400 {{ $page->isActive('/about') ? 'active text-teal-400' : '' }}"
            >About</a>
        </li>
{{--        <li class="pl-4">--}}
{{--            <a--}}
{{--                title="{{ $page->siteName }} Contact"--}}
{{--                href="/contact"--}}
{{--                class="nav-menu__item hover:text-teal-400 {{ $page->isActive('/contact') ? 'active text-teal-400' : '' }}"--}}
{{--            >Contact</a>--}}
{{--        </li>--}}
    </ul>
</nav>
