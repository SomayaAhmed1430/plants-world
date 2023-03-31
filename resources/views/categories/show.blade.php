<head>
    <link rel="stylesheet" href="{{asset("css/categories/show.css")}}">
    <title>Plant World | Products</title>
    <link
            rel="shortcut icon"
            href="{{ asset('assets/FaveIcon.svg') }}"
            type="image/x-icon"
        />
</head>
<x-guest-layout>
    <div class="category-header">
        <h1>Products</h1>
        <p>
            That's all categories that we have in this section.
        </p>
    </div>
    <div class="cards">
        @foreach ($category->menus as $menu)
                <a href="{{ route('order.index', $menu->id) }}" class="card">
                    <div class="image">
                        <img src="{{ Storage::url($menu->image) }}" alt="">
                    </div>
                    <div class="text">
                        <span>{{ $category->name }}</span>  
                        <h4>{{ $menu->name }}</h4>
                        <p>
                            {{ $menu->description }}
                        </p>
                    </div>
                    <div class="order">
                        <form action="{{ route('order.index', $menu->id) }}">
                            <button>Order Now</button>
                        </form>
                        <p>{{ $menu->price }}</p>
                    </div>
                </a>
            <!-- products cards  -->  
        @endforeach
    </div>    
        {{-- categories section--}}
    </x-guest-layout>