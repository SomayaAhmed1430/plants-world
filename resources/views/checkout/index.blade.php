<head>
    <link rel="stylesheet" href="{{ asset('css/checkout/index.css') }}">
</head>
<x-guest-layout>
    <div>
        @if (session()->has('success'))
            <div role="alert"
                style="color: white; background-color: green; margin-top: 1%; margin-right:10%; margin-left:10%; "
                class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:text-red-800">
                <span class="font-medium">Success</span> {{ session()->get('success') }}
        @endif
    </div>
    <form class="cart">
        <?php $totalprice = 0; ?>
        <div class="cart-header">
            <h1>Shopping Cart</h1>
        </div>
        <div class="cart-con">
            @if ($cart->count() > 0)
            <div class="left">
                @foreach ($cart as $cartItem)
                    <div class="product">
                        <div class="image">
                            <img src="{{ Storage::url($cartItem->image) }}" alt="" />
                        </div>
                        <div class="text">
                            <h3>{{ $cartItem->product_title }}</h3>
                            <ul>
                                <li>Price : {{ $cartItem->price }} <span>EGP </span></li>
                                <li>Quantity : {{ $cartItem->quantity }}</li>
                            </ul>
                            <div class="del">
                                <a onclick="return confirm('Are you sure! Remove this product?')"
                                    href="{{ route('removecart.removecart', $cartItem->id) }}">Remove From Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php $totalprice = $totalprice + $cartItem->price * $cartItem->quantity; ?>
                @endforeach
            </div>
            <div class="right">
                <div class="right-con">
                    <div class="price">
                        <ul>
                            <li>
                                <h3>SubTotal</h3>
                                <p>{{ $totalprice }} EGP</p>
                            </li>
                            <li>
                                <h3>Delivary</h3>
                                <p>30 EGP</p>
                            </li>
                            <li>
                                <h3>Total</h3>
                                <p>{{ $totalprice + 30 }} EGP</p>
                            </li>
                        </ul>
                    </div>
                    <div class="bayment">
                        <ul>
                            <li>
                                <h3>Bayment Methoud :</h3>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="" />
                                <label for="charset">
                                    Cash On Delivary
                                </label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="" />
                                <label for="charset">
                                    Buy With Card
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="adress">
                        <ul> We will deliver to:
                            <li>
                                <p>Name: {{ $cart->first()?->name ?? 'N/A' }}</p>
                            </li>
                            <li>
                                <p>Adress: {{ $cart->first()?->address ?? 'N/A' }}</p>
                            </li>
                            <li>
                                <p>Phone: {{ $cart->first()?->phone ?? 'N/A' }}</p>
                            </li> Make sure that all your data are right
                        </ul>
                    </div>
                    <a href="{{ route('checkout.cashorder') }}">Buy Now</a>
                </div>
            </div>    
            @else
            {{-- <img class="emptycart" src="{{ asset('assets/cart.svg') }}" alt="">
            <p class="empty"> No items in the cart </p> --}}
            <div class="empty">
                <img src="{{ asset('assets/file.svg') }}" alt="">
                <p>
                    No items in the shopping cart
                </p>
            </div>
            @endif
        </div>
    </form>
</x-guest-layout>

