<head>
    <link rel="stylesheet" href="{{ asset('css/menus/index.css') }}">
</head>
<x-guest-layout>
    <div class="categories-header">
        <h1>Our Menu</h1>
        <p>
            Hello Planters, Here you will find all our products as shown below,thanks for your support.
        </p>
    </div>
    <div class="cards">
        @foreach ($menus as $menu)
            <div class="card">
                <div class="image">
                    <img src="{{ Storage::url($menu->image) }}" alt="">
                </div>
                <div class="text">
                    <span>category</span>
                    <h4>{{ $menu->name }}</h4>
                    <p>
                        {{ $menu->description }}
                    </p>
                </div>
                <div class="order">
                    <a href="{{ route('order.index') }}">Order Now</a>
                    <p>{{ $menu->price }}</p>
                </div>
            </div>
            <!-- products cards  -->
        @endforeach
    </div>
</x-guest-layout>
