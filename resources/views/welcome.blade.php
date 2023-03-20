<x-guest-layout>

    <div class="loading">
        <img src="{{ asset('assets/Logo.svg') }}" alt="">
    </div>

    <div class="home">
        <h1>
            <!-- We love helping you <br />
            to safe the earth -->
            <li>
                <div>We</div>
            </li>
            <li>
                <div>love</div>
            </li>
            <li>
                <div>helping</div>
            </li>
            <li>
                <div>you</div>
            </li>
            <br />
            <li>
                <div>to</div>
            </li>
            <li>
                <div>safe</div>
            </li>
            <li>
                <div>the</div>
            </li>
            <li>
                <div>earth</div>
            </li>
        </h1>
        <div class="home-pharagraph">
            <p>
                We help realize you freams in making a garden, Let's <br />
                start with small things that can change the world.
            </p>
        </div>
    </div>
    <!-- home  -->

    <div class="parallaxed">
        <div class="parallax">
            <img data-u-scale="1.2" data-u-speed="2" data-parallax src="./assets/pexels-huy-phan-3209811.jpg"
                alt="" />
        </div>
    </div>
    <!-- parallaxed img  -->

    <div class="plant-care">
        <div class="plant-care-header">
            <h2>
                <!-- Steps to start taking care of your plants -->
                <li>
                    <div>Steps</div>
                </li>
                <li>
                    <div>to</div>
                </li>
                <li>
                    <div>start</div>
                </li>
                <li>
                    <div>taking</div>
                </li>
                <li>
                    <div>care</div>
                </li>
                <li>
                    <div>of</div>
                </li>
                <li>
                    <div>your</div>
                </li>
                <li>
                    <div>plants</div>
                </li>
            </h2>
            <div class="home-pharagraph">
                <p>
                    The right resolution for caring for green and smart
                    plants.
                </p>
            </div>
        </div>
        <div class="plant-care-con">
            <div>
                <img src="./assets/bx-water.svg" alt="" />
                <h3>Humidity Control</h3>
                <p>
                    You Have to be diligent in finding out the temperature
                    nad humidity according to the typing of plants have
                </p>
            </div>
            <div>
                <img src="./assets/bx-save.svg" alt="" />
                <h3>Pest Anticipation</h3>
                <p>
                    Rotate crop types regularly by planting serveral
                    different types of crops in one season.
                </p>
            </div>
            <div>
                <img src="./assets/bx-cut.svg" alt="" />
                <h3>Pruning Weeds</h3>
                <p>
                    Be diligent in cleaning the weeds or weeds that grow
                    regularly to avoid pests and diseases
                </p>
            </div>
        </div>
    </div>

    <div class="guide">
        <div class="guide-header">
            <h2>
                <!-- All you need to know about plants. -->
                <li>
                    <div>All</div>
                </li>
                <li>
                    <div>you</div>
                </li>
                <li>
                    <div>need</div>
                </li>
                <li>
                    <div>to</div>
                </li>
                <li>
                    <div>know</div>
                </li>
                <li>
                    <div>about</div>
                </li>
                <li>
                    <div>plants.</div>
                </li>
            </h2>
        </div>
        <div class="guide-con">
            <div class="left-sec">
                <div class="guide-parallax" data-u-scale="1.2" data-u-speed="2" data-parallax>
                    <img src="./assets/gcArtboard_1_copy_2_887x493.webp" alt="" />
                </div>
            </div>
            <div class="right-sec">
                <div class="guide-parallax" data-u-scale="1.2" data-u-speed="2" data-parallax>
                    <img src="./assets/gcArtboard_1_copy_2_887x493.webp" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="cateories">
        <div class="cateories-con">
            <div class="left">
                <div>
                    <div class="text">
                        <h3>House Plant Accessories</h3>
                        <a href="#">Shop Accessories</a>
                    </div>
                </div>
                <div>
                    <div class="text">
                        <h3>Promotional Item</h3>
                        <a href="#">Shop Gift Cards</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <div>
                    <div class="text">
                        <h3>New Arrivals!</h3>
                        <a href="#">Shop Now</a>
                    </div>
                </div>
                <div>
                    <div class="text">
                        <h3>Seed Packets</h3>
                        <a href="#">Shop Seeds</a>
                    </div>
                </div>
                <div>
                    <div class="text">
                        <h3>Shipping Info</h3>
                        <a href="#">How We Ship Plants</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- categories section --}}

    <div class="cards">
        <div class="cards-header">
            <h1>Best Sellers For Today!</h1>
            <p>
                Shop our best-selling favorites! Our trending house plants
            </p>
        </div>
        <div class="cards-con">
            @foreach ($bestsellers->menus as $menu)
                <a href="https://twitter.com" class="card">
                    <div class="image">
                        <img src="{{ Storage::url($menu->image) }}" alt="">
                    </div>
                    <div class="text">
                        <h3>{{ $menu->name }}</h3>
                        <p>
                            {{ $menu->description }}
                        </p>
                        <div class="order">
                            <p>{{ $menu->price }}</p>
                        </div>
                    </div>
                </a>
                <!-- products cards  -->
            @endforeach
        </div>
    </div>

</x-guest-layout>

<style>
    .categories-header {
        margin: 50px 0 0 0;
        min-height: 20vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-direction: column;
    }

    .categories-header p {
        padding: 10px 0;
    }

    .cards {
        width: 100%;
        padding: var(--page--padding);
        padding-bottom: 30px;
        display: flex;
        align-items: center;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .cards .cards-header {
        min-height: 20vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-direction: column;
    }

    .cards .cards-con {
        min-height: 50vh;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        overflow: visible;
    }

    .cards .cards-con .card {
        border-radius: 10px;
        height: 500px;
        margin: 10px;
        display: grid;
        grid-template-rows: 50% 50%;
        box-shadow: 0 10px 20px #ddd;
        transition: .5s transform, .5s box-shadow;
    }

    .cards .cards-con .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px #808080;
    }

    .cards .cards-con .card .image {
        height: 100%;
        width: 100%;
    }

    .cards .cards-con .card .image img {
        height: 100%;
        width: 100%;
    }

    .cards .cards-con .card .text {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 20px;
    }

    .cards .cards-con .card .text p {
        padding: 10px 0;
        font-size: 1.2vw;
    }

    .cards .cards-con .card .text .order {
    }

    .cards .cards-con .card .text .order p {
        color: #05796b;
    }

    /* .cards .card {
            position: relative;
            height: 450px;
            width: 30%;
            margin: 10px;
            padding: 0 0 20px 0;
            overflow: hidden;
            display: grid;
            grid-template-rows: 50% 35% 15%;
            box-shadow: 0 10px 20px #ddd;
            border: 1px solid #ddd;
            border-radius: 10px;
            border:1px solid red;
        }
        .cards .card .image {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            border:1px solid red;
        }
        .cards .card .image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border:1px solid red;
        }
        .cards .card .text {
            height: 100%;
            width: 100%;
            padding: 0 20px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            border:1px solid red;
        }

        .cards .card .text span {
            color: white;
            padding: 5px 0;
            width: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            background: #05796b;
            border-radius: 100px;
            border:1px solid red;
        }

        .cards .card .text h4 {
            font-size: 1.2vw;
            padding: 10px 0;
            border:1px solid red;
        }

        .cards .card .text p {
            font-size: 0.74vw;
            padding: 0;
            border:1px solid red;
        }

        .cards .card .order {
            height: 100%;
            width: 100%;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border:1px solid red;
        }

        .cards .card .order a {
            border: 1px solid #05796b;
            padding: 7px 15px;
            font-size: 17px;
            color: white;
            background: #05796b;
            transition: .5s color, .5s background;
            border:1px solid red;
        }

        .cards .card .order a:hover {
            color: #05796b;
            background: transparent;
            border:1px solid red;
        }

        .cards .card .order p {
            color: #05796b;
            border:1px solid red;
        } */

    /* products cards  */
</style>
