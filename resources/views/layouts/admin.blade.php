<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Plants World') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/admin-dashboard.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav>
        <a href="{{ url('admin') }}">
            <img src="{{ asset('assets/FooterLogo.svg') }}" alt="" class="logo">

        </a>
        <ul>

            <li>
                <x-admin-nav-link :href="route('welcom')" :active="request()->routeIs('welcom')">
                    {{ __('Home') }}
                </x-admin-nav-link>
            </li>
            <li>
                <x-admin-nav-link :href="route('admin.categories.index')" :active="request()->routeIs('admin.categories.index')">
                    {{ __('Categories') }}
                </x-admin-nav-link>
            </li>
            <li>
                <x-admin-nav-link :href="route('admin.menus.index')" :active="request()->routeIs('admin.menus.index')">
                    {{ __('Products') }}
                </x-admin-nav-link>
            </li>
            <li>
                <x-admin-nav-link :href="route('admin.pots.index')" :active="request()->routeIs('admin.pots.index')">
                    {{ __('Pots & Planters') }}
                </x-admin-nav-link>
            </li>
            <li>
                <x-admin-nav-link :href="route('admin.orders.index')" :active="request()->routeIs('admin.orders.index')">
                    {{ __('Orders') }}
                </x-admin-nav-link>
            </li>
            <li>
                <x-admin-nav-link :href="route('admin.comments.index')" :active="request()->routeIs('admin.comments.index')">
                    {{ __('Comments') }}
                </x-admin-nav-link>
            </li>
            {{-- <li>
                    <x-admin-nav-link :href="route('admin.tables.index')" :active="request()->routeIs('admin.tables.index')">
                        {{ __('Tables') }}
                    </x-admin-nav-link>
                </li>
                <li>
                    <x-admin-nav-link :href="route('admin.reservations.index')" :active="request()->routeIs('admin.reservations.index')">
                        {{ __('Resevations') }}
                    </x-admin-nav-link>
                </li> --}}

            {{-- <li>
                    <a href="{{ route('admin.categories.index') }}">Categories</a>
                </li>
                <li>
                    <a href="{{ route('admin.menus.index') }}">Menus</a>
                </li>
                <li>
                    <a href="{{ route('admin.tables.index') }}">Tables</a>
                </li>
                <li>
                    <a href="{{ route('admin.reservations.index') }}">Resevations</a>
                </li> --}}


            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    <span>{{ Auth::user()->name }}</span>
                    <svg fill="#fff" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                        class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">

                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>

                </div>
            </div>
        </ul>

    </nav>
    <main class="m-2 p-8 w-full"
        style="
            z-index:1;
            min-height:100vh;
            width:80%;
            position:absolute;
            top:0;
            right:0;">
        <div>
            @if (session()->has('danger'))
                <div role="alert"
                    style="color: white; background-color: #f44336; margin-top: 1%; margin-right:10%; margin-left:10%; "
                    class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:text-red-800">
                    <span class="font-medium">Danger</span> {{ session()->get('danger') }}
                    {{-- <div class="alert alert-danger" role="alert">
                        {{ session()->get('danger') }} 
                    </div> --}}
            @endif
            @if (session()->has('success'))
                <div role="alert"
                    style="color: white; background-color: green; margin-top: 1%; margin-right:10%; margin-left:10%; "
                    class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:text-red-800">
                    <span class="font-medium">Success</span> {{ session()->get('success') }}
                    {{-- <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }} 
                    </div> --}}
            @endif
            @if (session()->has('warning'))
                <div role="alert"
                    style="color: white; background-color: rgb(231, 233, 111); margin-top: 1%; margin-right:10%; margin-left:10%; "
                    class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:text-red-800">
                    <span class="font-medium">Warning</span> {{ session()->get('warning') }}
                    {{-- <div class="alert alert-warning" role="alert">
                        {{ session()->get('warning') }}
                    </div> --}}
            @endif
        </div>
        </div>
        {{ $slot }}
    </main>
</body>

</html>
