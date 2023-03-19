<x-guest-layout>
    <div class="product">
        <div class="product-con">
            <div class="images">
                <div class="img-list">
                    <img class="img1 active" src="{{ asset('assets/5 Gardening Trends Taking Over 2021 _ eHow_com.jpg') }}" alt="" />
                    <img class="img2" src="{{ asset('assets/5 Gardening Trends Taking Over 2021 _ eHow_com.jpg') }}" alt="" />
                    <img class="img3" src="{{ asset('assets/5 Gardening Trends Taking Over 2021 _ eHow_com.jpg') }}" alt="" />
                    <img class="img4" src="{{ asset('assets/5 Gardening Trends Taking Over 2021 _ eHow_com.jpg') }}" alt="" />
                </div>
                <div class="img-preview">
                    <img class="main-img" src="{{ asset('assets/5 Gardening Trends Taking Over 2021 _ eHow_com.jpg') }}" alt="" />
                </div>
            </div>
            <div class="text">
                <h2>Peperomia Obtusifolia</h2>
                <h3>$ 1450 USD</h3>
                <p>
                    This South American native grows in tropical rainforest
                    areas in its natural habitat, so it prefers a spot in
                    your home where it's humid and the light is bright but
                    indirect. Other than this, it's a fairly forgiving
                    species that's not bothered by many pests or diseases
                    and is a good choice as a beginner's houseplant.
                </p>
                <div class="quantity">
                    <label for="Quantity">Quantity</label>
                    <div class="amount">
                        <button class="negative">-</button>
                        <p class="counter">1</p>
                        <button class="plus">+</button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <a href="#">Add to cart </a>
                    <a href="#">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

<style>
    header .logo img {
        animation-delay: 0s;
    }

    header ul li {
        animation-delay: 0s;
    }

    header ul li:nth-of-type(2) {
        animation-delay: 0.05s;
    }

    header ul li:nth-of-type(3) {
        animation-delay: 0.1s;
    }

    header ul li:nth-of-type(4) {
        animation-delay: 0.15s;
    }

    header ul li:nth-of-type(5) {
        animation-delay: 0.2s;
    }

    header .register li {
        animation-delay: 0.25s;
    }

    header .register li:nth-of-type(2) {
        animation-delay: 0.3s;
    }

    header {
        padding: 0px 300px;
    }

    /* header */

    .product {
        min-height: 90vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: var(--products--padding);
    }

    .product .product-con {
        min-height: 75vh;
        width: 100%;
        display: grid;
        grid-template-columns: 60% 40%;
    }

    .product .product-con .images {
        display: grid;
        grid-template-columns: 10% 1fr;
    }

    .product .product-con .images .img-preview {
        height: 75vh;
        width: 100%;
        padding: 20px 20px 0px 20px;
        overflow: hidden;
    }

    .product .product-con .images .img-preview img {
        height: 75vh;
        width: 100%;
        object-fit: cover;
        overflow: hidden;
    }

    .product .product-con .images .img-list {
        height: 75vh;
        width: 100%;
        padding: 20px 10px;
        overflow: hidden;
    }

    .product .product-con .images .img-list img {
        height: 100px;
        width: 100%;
        cursor: pointer;
        object-fit: cover;
        border: 1px solid #ddd;
        opacity: 0.5;
    }

    .product .product-con .images .img-list img.active {
        opacity: 1;
    }

    .product .product-con .text {
        height: 75vh;
        width: 100%;
        padding: 20px;
    }

    .product .product-con .text h3 {
        padding: 30px 0px 10px 0px;
    }

    .product .product-con .text p {
        font-size: var(--a--);
        color: #2d2d2d;
    }

    .product .product-con .text .quantity {
        margin: 20px 0;
        border: none;
    }

    .product .product-con .text .quantity label {
        text-transform: uppercase;
        font-weight: bolder;
        font-size: var(--a--);
        border: none;
    }

    .product .product-con .text .quantity .amount {
        height: 50px;
        width: 30%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0px;
        background: #fff;
        box-shadow: 0 0 20px #ddd;
        border: none;
        overflow: hidden;
    }

    .product .product-con .text .quantity .amount button {
        height: 50px;
        width: 50px;
        color: #05796b;
        background: #fff;
        font-size: var(--p--);
        padding-bottom: 6px;
        border: none;
        outline: none;
        cursor: pointer;
        transition: .5s color, .5s background;
    }

    .product .product-con .text .quantity .amount button:hover {
        background: #05796cd5;
        color: #fff;
    }

    .product .product-con .text .quantity .amount button:active {
        background: #05796caa;
        color: #fff;
    }

    .product .product-con .text .add-to-cart a {
        border: 1px solid #05796b;
        color: #05796b;
        padding: 1rem 0;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
        transition: .5s color, .5s background;
    }

    .product .product-con .text .add-to-cart a:nth-of-type(2) {
        background: #05796b;
        color: #fff;
        border: 1px solid #05796b;
    }

    .product .product-con .text .add-to-cart a:hover:nth-of-type(2) {
        background: #0000;
        color: #05796b;
        border: 1px solid #05796b;
    }

    .product .product-con .text .add-to-cart a:hover {
        background: #05796b;
        color: #fff;
    }
</style>

<script>
    let mainImg = document.querySelector(".main-img");
    let img1 = document.querySelector(".img1");
    let img2 = document.querySelector(".img2");
    let img3 = document.querySelector(".img3");
    let img4 = document.querySelector(".img4");
    let negative = document.querySelector(".negative");
    let firstCount = document.querySelector(".counter");
    let counter = 1;
    let plus = document.querySelector(".plus");
    img1.onclick = function(ele) {
        ele.preventDefault();
        mainImg.src = "./nagy-arnold-X_IvVDuHvDQ-unsplash.jpg";
        img1.classList.add("active");
        img2.classList.remove("active");
        img3.classList.remove("active");
        img4.classList.remove("active");
    };
    img2.onclick = function(ele) {
        ele.preventDefault();
        mainImg.src =
            "./art-and-soil-bangalore-W4ZUFRJIWHw-unsplash.jpg";
        img1.classList.remove("active");
        img2.classList.add("active");
        img3.classList.remove("active");
        img4.classList.remove("active");
    };
    img3.onclick = function(ele) {
        ele.preventDefault();
        mainImg.src = "./brina-blum-2RyuA0imp5k-unsplash.jpg";
        img1.classList.remove("active");
        img2.classList.remove("active");
        img3.classList.add("active");
        img4.classList.remove("active");
    };
    img4.onclick = function(ele) {
        ele.preventDefault();
        mainImg.src = "./galina-n-miziNqvJx5M-unsplash.jpg";
        img1.classList.remove("active");
        img2.classList.remove("active");
        img3.classList.remove("active");
        img4.classList.add("active");
    };

    plus.onclick = function(ele) {
        ele.preventDefault();
        firstCount.innerHTML = ++counter;
    };
    negative.onclick = function(ele) {
        if (counter > 1) {
            ele.preventDefault();
            firstCount.innerHTML = --counter;
        }
    };
</script>