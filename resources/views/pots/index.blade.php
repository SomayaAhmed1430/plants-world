<head>
    <link rel="stylesheet" href="{{ asset('css/pots/index.css') }}">
    <title>Plant World | Pots & Planters</title>
    <link
            rel="shortcut icon"
            href="{{ asset('assets/FaveIcon.svg') }}"
            type="image/x-icon"
        />
</head>
<x-guest-layout>
    <div class="categories-header">
        <div class="title">
            <div class="title-con">Pots & Planters</div>
        </div>
        <h1>
            <li>
                <div>This</div>
            </li>
            <li>
                <div>is</div>
            </li>
            <li>
                <div>all</div>
            </li>
            <li>
                <div>about</div>
            </li>
            <li>
                <div>pots</div>
            </li>
            <li>
                <div>&</div>
            </li>
            <li>
                <div>planters</div>
            </li>
            <li>
                <div>products</div>
            </li>
            <li>
                <div>of</div>
            </li>
            <li>
                <div>Plants</div>
            </li>
            <li>
                <div>World</div>
            </li>
        </h1>
    </div>
    <div class="parallaxed">
        <div class="parallax">
            <img data-u-scale="1.2" data-u-speed="2" data-parallax 
            src="{{ asset('assets/Pots & Planters.jpg') }}" alt="" />
        </div>
    </div>
    <div class="categories-header2">
        <h1>Our Pots</h1>
        <p>
            Hello Planters, Here you will find all our Pots & Planters as shown below,choose one suitable for your need.
        </p>
    </div>
    <!-- parallaxed img  -->
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
                    <a href="{{ route('order.index', $pot->id) }}">Order Now</a>
                    <p>{{ $pot->price }}</p>
                </div>
            </div>
            <!-- products cards  -->
        @endforeach
    </div>

</x-guest-layout>