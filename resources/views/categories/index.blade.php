<head>
    <link rel="stylesheet" href="{{ asset("css/categories/index.css") }}">
    <title>Plant World | Categories</title>
    <link
            rel="shortcut icon"
            href="{{ asset('assets/FaveIcon.svg') }}"
            type="image/x-icon"
        />
</head>
<x-guest-layout>

    <div class="categories">
        <div class="categories-header">
            <h1>All categories</h1>
            <p>
                That's all categories that we have
            </p>
        </div>
        <div class="categories-con">
            @foreach ($categories as $category)
                <div class="category">
                    {{-- <img src="{{ asset('assets/Spring Container Gardens.png') }}" alt=""> --}}
                    <img src="{{ Storage::url($category->image) }}">
                    <div class="text">
                        <h3>{{ $category->name }}</h3>
                        <a href="{{ route('categories.show', $category->id) }}">Show Products</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- categories section --}}
</x-guest-layout>