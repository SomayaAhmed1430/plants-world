<head>
    <link rel="stylesheet" href="{{ asset('css/order/index.css') }}">
    <title>Plant World | Order</title>
    <link
            rel="shortcut icon"
            href="{{ asset('assets/FaveIcon.svg') }}"
            type="image/x-icon"
        />
</head>
<x-guest-layout>
    <div class="product">
        <div class="product-con">
            @foreach ($product as $order)
                <form action="{{ route('order.store',$order->id) }}" method="POST">
                    @csrf
                    <div class="images">
                        <div class="img-preview">
                        </div>
                        <img class="main-img" src="{{ Storage::url($order->image) }}" alt="" />
                    </div>
                    <div class="text">
                        <h2>{{ $order->name }}</h2>
                        <h3>{{ $order->price }} EGP</h3>
                        <p>
                            {{ $order->description }}
                        </p>
                        <div class="quantity">
                            <label for="Quantity">Quantity</label>
                            <input name="quantity" type="number" value="1">
                            {{-- <div class="amount">
                                <button class="negative">-</button>
                                <p name="quantity" type="number" class="counter">1</p>
                                <button class="plus">+</button>
                            </div> --}}
                        </div>
                        {{-- @if (Route::has('login'))
                            @auth --}}
                                <div class="add-to-cart">
                                    <input type="submit" value="Add to cart"> </input>
                                    {{-- <input type="submit" value="Buy Now"></input> --}}
                                </div>
                            {{-- @else
                                <div class="add-to-cart">
                                    <a href="{{ route('login') }}">Add to cart </a>
                                    <a href="{{ route('login') }}">Buy Now</a>
                                </div>    
                            @endauth
                        @endif --}}
                    </div> 
                </form>    
            @endforeach
        </div>
    </div>
</x-guest-layout>
{{-- <script src="{{ asset('js/order.js') }}"></script> --}}

                    