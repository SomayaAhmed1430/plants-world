<head>
    <link rel="stylesheet" href="{{ asset('css/pots/index.css') }}">
</head>
<x-guest-layout>
    <div class="categories-header">
        <h1>Our Pots</h1>
        <p>
            Hello Planters, Here you will find all our Pots & Planters as shown below,choose one suitable for your need.
        </p>
    </div>
    <div class="cards">
        @foreach ($pot as $pot)
            <div class="card">
                <div class="image">
                    <img src="{{ Storage::url($pot->image) }}" alt="">
                </div>
                <div class="text">
                    <span>
                        {{ $pot->description }}
                    </span>
                    <h4>{{ $pot->name }}</h4>
                </div>
                <div class="order">
                    <a href="">Order Now</a>
                    <p>{{ $pot->price }}</p>
                </div>
            </div>
            <!-- products cards  -->
        @endforeach
    </div>

</x-guest-layout>