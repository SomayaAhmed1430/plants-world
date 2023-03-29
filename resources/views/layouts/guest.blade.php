<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Plants World</title>
</head>

<body class="font-sans text-gray-900 antialiased">

    <header :class="isOpen ? 'flex' : 'hidden'">
        <a href="#" class="logo">
            <img src="{{ asset('assets/Logo.svg') }}" alt="" />
        </a>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="{{ route('about.index') }}">About us</a>
            </li>
            <li>
                <a href="{{ route('categories.index') }}">Categories</a>
            </li>
            {{-- <li>
                <a href="{{ route('menus.index') }}">Menu</a>
            </li> --}}
            <li>
                <a href="{{ route('guide.index') }}">Plants Guide</a>
            </li>
            <li>
                <a href="{{ route('pots.index') }}">Pots & Planters</a>
            </li>
        </ul>
        <ul class="info">
            <li>
                @if (Route::has('login'))
                    @auth
                        <div class="name">
                            <div class="variosName">
                                {{ auth()->user()->name }}
                            </div>
                            <img class="arrow" src="{{ asset('assets/chevron-down-regular-24 (1).png') }}" alt="">
                            <a class="cart" href="{{ route('checkout.index') }}">
                                <img src="{{ asset('assets/cart-alt-regular-24.png') }}" alt="">
                            </a>
                            <form class="formLogOut" method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                    @if (Auth::user()->is_admin)
                                        <x-dropdown-link :href="route('admin.index')" :active="request()->routeIs('dashboard')">
                                            {{ __('Dashboard') }}
                                        </x-dropdown-link>
                                    @endif
                                </x-dropdown-link>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a class="register" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </li>
        </ul>

    </header>
    <!-- header  -->

    {{ $slot }}
    {{-- home content --}}

    </div>
    <!-- scripts -->
    <script src="{{ asset('js/lenis.js') }}"></script>
    <script src="{{ asset('js/ukiyo.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
