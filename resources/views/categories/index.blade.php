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
                    <img src="{{ asset('assets/Spring Container Gardens.png') }}" alt="">
                    {{-- <img src="{{ Storage::url($category->image) }}"> --}}
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

<style>
    .categories {
        padding: var(--page--padding);
    }

    .categories .categories-header {
        margin: 50px 0 0 0;
        min-height: 20vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column
    }

    .categories .categories-header p {
        padding: 10px 0;
    }

    .categories .categories-con {
        width: 100%;
        padding-bottom: 30px;
        display: flex;
        align-items: start;
        flex-direction: row;
        flex-wrap: wrap;
        overflow: visible;
    }

    .categories .categories-con .category {
        position: relative;
        height: 250px;
        width: 31%;
        margin: 10px;
        padding: 0 0 20px 0;
        box-shadow: 0 10px 20px #ddd;
        border: 1px solid #ddd;
        border-radius: 10px;
        transition: .5s transform, .5s box-shadow
    }
    
    .categories .categories-con .category:hover{
        transform: translateY(-10px);
        box-shadow: 0 10px 30px #808080;
    }

    .categories .categories-con .category img {
        height: 250px;
        width: 100%;
        object-fit: cover;
    }

    .categories .categories-con .category::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: #0000006c;
        z-index: 1;
    }

    .categories .categories-con .category .text {
        position: absolute;
        top: 0;
        left: 0;
        height: 250px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        z-index: 2;
    }

    .categories .categories-con .category .text h3 {
        color: white;
        padding: 10px 0 10px 0
    }

    .categories .categories-con .category .text a {
        padding: 0.5rem 2rem;
        background: white;
        color: #05796b:
    }
</style>
