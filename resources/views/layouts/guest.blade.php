<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/loading.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <title>Plants World</title>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        {{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> --}}

            <header :class="isOpen ? 'flex' : 'hidden' ">
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
                    <li>
                        <a href="{{ route('menus.index') }}">Menu</a>
                    </li>
                    <li>
                        <a href="{{ route('guide.index') }}">Plants Guide</a>
                    </li>
                    <li>
                        <a href="{{ route('pots.index') }}">Pots & Planters</a>
                    </li>
                    {{-- <li>
                        @if (Auth::user()->is_admin)
                            <x-nav-link :href="route('admin.index')" :active="request()->routeIs('dashboard')">
                                {{ __('Admin') }}
                            </x-nav-link>
                        @endif              
                    </li> --}}
                </ul>
                <li>
                    @if (Route::has('login'))
                            @auth
                                <div style="display: flex; gap: .5rem; align-items:center">
                                    {{ auth()->user()->name }}

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
        
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
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
                    {{-- <li><a href="#">Login</a></li>
                    <li><a href="#" class="register">Register</a></li> --}}
                </li>
                <!-- Settings Dropdown -->
            {{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div> --}}

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
