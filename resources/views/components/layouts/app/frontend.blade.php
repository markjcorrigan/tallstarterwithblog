<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')

{{--    <head>--}}
{{--        <title>{{ $title ?? 'Page Title' }}</title>--}}
{{--    </head>--}}
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800" >
<style>

    /*.footer-bg {*/
    /*    background-color: #212529 !important;*/
    /*}*/



    /*flux-header {*/
    /*    position: relative;*/
    /*    z-index: 1;*/
    /*    top: 0;*/
    /*    margin-top: 0;*/
    /*    padding-top: 0;*/
    /*}*/



    .custom-button:focus {
        background-color: #212529 !important; /* light gray background color */
    }

    .custom-button:hover {
        background-color: transparent; /* or any other color you want */
        color: #000; /* black text color */

    }

    /*.content {*/
    /*    padding-bottom: 300px; !* Increase the padding to match the footer height *!*/
    /*}*/



</style>

{{--<flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">--}}
{{--    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>--}}

{{--    <a href="{{ route('home') }}" class="ml-2 mr-5 flex items-center space-x-2 lg:ml-0">--}}
{{--        <x-app-logo class="size-8" href="#"></x-app-logo>--}}
{{--    </a>--}}
{{--    <a href="{{ route('home') }}" class="ml-2 mr-5 flex items-center space-x-2 lg:ml-0">--}}
{{--        --}}{{--        <x-app-logo class="size-8" href="#"></x-app-logo>--}}{{--<img src="{{ asset('images/hometransparent.png') }}" alt="logo" class="w-10 h-10">    </a>--}}



<flux:header class="w-full flex justify-center px-4 py-2 bg-gray-100 shadow-md">

{{--        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left"/>--}}
        <a href="{{ route('home') }}" class="nav-link">
{{--            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="40" height="40" viewBox="0 0 256 256" xml:space="preserve">--}}
{{--<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">--}}
{{--    <path d="M 88.273 26.047 L 49.746 1.384 c -2.883 -1.846 -6.61 -1.845 -9.493 0 L 1.728 26.047 c -1.251 0.801 -1.811 2.297 -1.394 3.722 c 0.417 1.426 1.695 2.383 3.181 2.383 h 5.487 v 50.069 c 0 4.289 3.489 7.779 7.778 7.779 h 22.442 C 43.511 90 47 86.511 47 82.221 v -8.748 l 0.81 0.854 c 0.394 0.414 0.922 0.623 1.451 0.623 c 0.494 0 0.989 -0.182 1.377 -0.549 c 0.801 -0.761 0.834 -2.026 0.074 -2.828 l -4.261 -4.491 c -0.006 -0.007 -0.014 -0.011 -0.02 -0.017 c -0.363 -0.373 -0.869 -0.606 -1.431 -0.606 c -0.563 0 -1.07 0.235 -1.433 0.609 c -0.005 0.006 -0.012 0.009 -0.018 0.015 l -4.26 4.491 c -0.76 0.801 -0.727 2.067 0.075 2.827 c 0.802 0.762 2.067 0.727 2.828 -0.075 L 43 73.472 v 8.749 C 43 84.304 41.305 86 39.222 86 H 16.78 c -2.083 0 -3.778 -1.695 -3.778 -3.779 V 30.152 c 0 -1.105 -0.896 -2 -2 -2 H 5.859 L 42.41 4.753 c 1.573 -1.007 3.606 -1.007 5.18 0 l 36.552 23.399 h -5.144 c -1.105 0 -2 0.896 -2 2 v 52.069 c 0 2.083 -1.694 3.779 -3.778 3.779 h -9.109 c -2.083 0 -3.779 -1.695 -3.779 -3.779 V 54.619 c 0 -4.288 -3.489 -7.778 -7.778 -7.778 h -15.11 c -4.289 0 -7.778 3.489 -7.778 7.778 v 24.345 c 0 1.105 0.896 2 2 2 s 2 -0.896 2 -2 V 54.619 c 0 -2.083 1.695 -3.778 3.778 -3.778 h 15.11 c 2.083 0 3.778 1.694 3.778 3.778 v 27.602 c 0 4.289 3.489 7.779 7.779 7.779 h 9.109 c 4.288 0 7.778 -3.489 7.778 -7.779 V 32.152 h 5.488 c 1.485 0 2.764 -0.958 3.181 -2.384 C 90.083 28.343 89.524 26.847 88.273 26.047 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>--}}
{{--</g>--}}
{{--</svg>--}}
            <svg height="50px" width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 424.098 424.098" xml:space="preserve">
<g>
    <g>
        <path style="fill:#010002;" d="M351.191,401.923H72.901c-4.487,0-8.129-3.633-8.129-8.129V242.262l-56.664-0.114
			c-3.284-0.008-6.243-1.992-7.495-5.023c-1.252-3.04-0.553-6.527,1.764-8.852L206.104,24.546c1.853-1.845,4.503-2.666,7.047-2.276
			c2.414,0.39,4.511,1.845,5.731,3.942l47.43,47.43V58.499c0-4.487,3.633-8.129,8.129-8.129h47.755c4.495,0,8.129,3.642,8.129,8.129
			v79.156l91.39,91.398c2.325,2.325,3.024,5.828,1.764,8.868c-1.26,3.032-4.227,5.007-7.511,5.007c-0.008,0-0.008,0-0.016,0
			l-56.64-0.114v150.98C359.32,398.29,355.686,401.923,351.191,401.923z M81.03,385.666h262.033V234.67
			c0-2.162,0.854-4.235,2.39-5.755c1.528-1.52,3.585-2.374,5.739-2.374c0.008,0,0.008,0,0.016,0l45.105,0.089l-79.855-79.863
			c-1.528-1.528-2.382-3.593-2.382-5.747V66.628h-31.498v26.645c0,3.284-1.975,6.251-5.015,7.511
			c-3.032,1.268-6.527,0.569-8.86-1.764l-57.038-57.038l-183.95,183.95l45.203,0.089c4.487,0.008,8.112,3.642,8.112,8.129
			C81.03,234.149,81.03,385.666,81.03,385.666z"/>
    </g>
</g>
</svg>
        </a>


        <!-- existing code -->
        <flux:spacer/>
        <flux:spacer/>
        <flux:spacer/>
        <flux:spacer/>
        <flux:spacer/>
        <flux:spacer/>
        @guest

        <flux:navbar.item class="text-black" style="color: black  !important"  href="{{ route('pmwayguest') }}" :current="request()->routeIs('pmwayguest')"> PMWay </flux:navbar.item>
            <flux:navbar.item class="text-black" style="color: black !important" href="{{ route('portfolio') }}" :current="request()->routeIs('portfolio')">
                Portfolio
            </flux:navbar.item>


            <flux:navbar.item class="text-black" style="color: black  !important" href="{{ route('blog') }}" :current="request()->routeIs('blog')"> Blog </flux:navbar.item>
            <flux:navbar.item class="text-black" style="color: black  !important" href="{{ route('contact') }}" :current="request()->routeIs('contact')"> Contact </flux:navbar.item>
        @endguest
        @auth
        <flux:navbar.item class="text-black" style="color: black" href="{{ route('pmwayauth') }}" :current="request()->routeIs('pmwayauth')"> PMWay </flux:navbar.item>
        <flux:navbar.item class="text-black" style="color: black  !important" href="{{ route('blog') }}" :current="request()->routeIs('blog')"> Blog </flux:navbar.item>
{{--            <flux:navbar.item class="text-black" style="color: black" href="{{ route('portfoliodash') }}" :current="request()->routeIs('portfoliodash')">  <i class="fa-duotone fa-truck" style="font-size: 30px !important; --fa-primary-color: #3498db; --fa-secondary-color: #f1c40f; --fa-primary-opacity: 1; --fa-secondary-opacity: 1;"></i>--}}
{{--            </flux:navbar.item>--}}
        @endauth

        <!-- existing code -->







    {{--    <flux:navbar class="-mb-px max-lg:hidden">--}}
{{--        <flux:navbar.item icon="layout-grid" href="{{ route('dashboard') }}" :current="request()->routeIs('dashboard')">--}}
{{--            Dashboard--}}
{{--        </flux:navbar.item>--}}
{{--        <div class="w-4"></div>--}}
{{--        --}}{{--        <div class="w-40"></div>--}}
{{--        <flux:navbar.item href="{{ route('all.post') }}" :current="request()->routeIs('contact')">--}}
{{--            Blog--}}
{{--        </flux:navbar.item>--}}
{{--        <div class="w-40"></div>--}}
{{--        <flux:navbar.item href="{{ route('contact') }}" :current="request()->routeIs('contact')">--}}
{{--            Contact--}}
{{--        </flux:navbar.item>--}}
{{--        <div class="w-40"></div>--}}
{{--    </flux:navbar>--}}

    <flux:spacer/>
    @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
            @guest
                <flux:button href="{{ route('login') }}" variant="primary"  class="custom-button"
                >
                    {{ __('global.log_in') }}
                </flux:button>

            @if (Route::has('register'))
                    <flux:button href="{{ route('register') }}" variant="primary"  class="custom-button"
                    >
                        {{ __('global.register') }}
                    </flux:button>
                @endif
            @endguest

        </nav>
    @endif
    {{--            <flux:navbar class="mr-1.5 space-x-0.5 py-0!">--}}
    {{--                <flux:tooltip content="Search" position="bottom">--}}
    {{--                    <flux:navbar.item class="!h-10 [&>div>svg]:size-5" icon="magnifying-glass" href="#" label="Search" />--}}
    {{--                </flux:tooltip>--}}
    {{--                <flux:tooltip content="Repository" position="bottom">--}}
    {{--                    <flux:navbar.item--}}
    {{--                        class="h-10 max-lg:hidden [&>div>svg]:size-5"--}}
    {{--                        icon="folder-git-2"--}}
    {{--                        href="https://github.com/laravel/livewire-starter-kit"--}}
    {{--                        target="_blank"--}}
    {{--                        label="Repository"--}}
    {{--                    />--}}
    {{--                </flux:tooltip>--}}
    {{--                <flux:tooltip content="Documentation" position="bottom">--}}
    {{--                    <flux:navbar.item--}}
    {{--                        class="h-10 max-lg:hidden [&>div>svg]:size-5"--}}
    {{--                        icon="book-open-text"--}}
    {{--                        href="https://laravel.com/docs/starter-kits"--}}
    {{--                        target="_blank"--}}
    {{--                        label="Documentation"--}}
    {{--                    />--}}
    {{--                </flux:tooltip>--}}
    {{--            </flux:navbar>--}}

    @auth
        @if (Session::has('admin_user_id'))
            <div class="py-2 flex items-center justify-center dark:text-white rounded mr-4">
                <form id="stop-impersonating" class="flex flex-col items-center gap-3" action="{{ route('impersonate.destroy') }}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <flux:button type="submit" size="sm" variant="danger" form="stop-impersonating" class="!w-full !flex !flex-row cursor-pointer">
                        <div class="flex items-center gap-2">
                            <flux:icon.loader-circle class="animate-spin mr-2"/>
                            {{ __('users.stop_impersonating') }}
                        </div>
                    </flux:button>
                </form>
            </div>
        @endif
        <!-- Desktop User Menu -->
        <flux:dropdown position="top" align="end">
            <flux:profile
                class="cursor-pointer"
                :initials="auth()->user()->initials()"
            />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                            {{--                                <div class="grid flex-1 text-left text-sm leading-tight">--}}
                            {{--                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>--}}
                            {{--                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>--}}
                            {{--                                </div>--}}
                        </div>
                    </div>
                </flux:menu.radio.group>

                @can('access dashboard')
                    <flux:menu.separator/>
                    <flux:menu.radio.group>
                        <flux:menu.item href="{{ route('admin.index') }}" icon="shield">
                            {{ __('global.admin_dashboard') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                @endcan

                <flux:menu.separator/>
                <flux:menu.radio.group>
                    <flux:menu.item href="/settings/profile" icon="cog">
                        {{ __('settings.title') }}
                    </flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator/>

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('global.log_out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    @endauth
</flux:header>

<!-- Mobile Menu -->
<flux:sidebar stashable sticky class="lg:hidden border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.toggle class="lg:hidden" icon="x-mark"/>

    <a href="{{ route('dashboard') }}" class="ml-1 flex items-center space-x-2">
        <x-app-logo class="size-8" href="#"></x-app-logo>
    </a>
    @auth
        <flux:navlist variant="outline">
            <flux:navlist.group heading="Platform">
                <flux:navlist.item icon="layout-grid" href="{{ route('dashboard') }}" :current="request()->routeIs('dashboard')">
                    Dashboard
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>
    @endauth

    <flux:spacer/>

</flux:sidebar>



<div style="position: relative; min-height: 100vh;">


    <flux:main container style="padding-bottom: 550px; padding-top: 60px;">
        <div>
            {{ $slot }}
        </div>
    </flux:main>
    <flux:footer style="position: absolute; bottom: 0; left: 0; width: 100%; margin: 0; padding: 0;">
        @include('partials.footer')
    </flux:footer>
</div>





@fluxScripts
</body>

</html>
