<x-guest-layout>

    <div class="loading">
        <img src="{{ asset('assets/Logo.svg') }}" alt="">
    </div>

    <div class="home">
        <h1>
            <!-- We love helping you <br />
            to safe the earth -->
            <li><div>We</div></li>
            <li><div>love</div></li>
            <li><div>helping</div></li>
            <li><div>you</div></li>
            <br />
            <li><div>to</div></li>
            <li><div>safe</div></li>
            <li><div>the</div></li>
            <li><div>earth</div></li>
        </h1>
        <div class="home-pharagraph">
            <p>
                We help realize you freams in making a garden, Let's <br />
                start with small things that can change the world.
            </p>
        </div>
        <div class="home-link">
            <div class="animated-link">
                <a href="{{ route('reservations.step.one') }}">Let's get started</a>
            </div>
        </div>
    </div>
    <!-- home  -->

    <div class="parallaxed">
        <div class="parallax">
            <img
                data-u-scale="1.2"
                data-u-speed="2"
                data-parallax
                src="./assets/pexels-huy-phan-3209811.jpg"
                alt=""
            />
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
                <li><div>All</div></li>
                <li><div>you</div></li>
                <li><div>need</div></li>
                <li><div>to</div></li>
                <li><div>know</div></li>
                <li><div>about</div></li>
                <li><div>plants.</div></li>
            </h2>
        </div>
        <div class="guide-con">
            <div class="left-sec">
                <div
                    class="guide-parallax"
                    data-u-scale="1.2"
                    data-u-speed="2"
                    data-parallax
                >
                    <img
                        src="./assets/gcArtboard_1_copy_2_887x493.webp"
                        alt=""
                    />
                </div>
            </div>
            <div class="right-sec">
                <div
                    class="guide-parallax"
                    data-u-scale="1.2"
                    data-u-speed="2"
                    data-parallax
                >
                    <img
                        src="./assets/gcArtboard_1_copy_2_887x493.webp"
                        alt=""
                    />
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
    {{-- categories section--}}

    <div class="cards">
        <div class="cards-header">
            <h1>Best Sellers For Today!</h1>
            <p>
                Shop our best-selling favorites! Our trending house plants
            </p>
        </div>
        @foreach ($bestsellers->menus as $menu)
                <div class="card">
                    <div class="image">
                        {{-- <img src="{{ Storage::url($menu->image) }}" alt=""> --}}
                        <img src="{{asset('assets/The Sill _ Official Site _ Houseplant Delivery & Plant Care.png')}}" alt="">
                    </div>
                    <div class="text">
                        <h4>{{ $menu->name }}</h4>
                        <p>
                            {{ $menu->description }}
                        </p>
                    </div>
                    <div class="order">
                        <p>{{ $menu->price }}</p>
                    </div>
                </div>
            <!-- products cards  -->  
        @endforeach
    </div>    

    {{-- <section class="h-100" style="background-color: #eee;">
        <div class="container h-100 py-5">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">
      
      
              <div class="card rounded-3 mb-4">
                <div class="card-body p-4">
                  <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <p class="lead fw-normal mb-2">Basic T-shirt</p>
                      <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="fas fa-minus"></i>
                      </button>
      
                      <input id="form1" min="0" name="quantity" value="2" type="number"
                        class="form-control form-control-sm" />
      
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h5 class="mb-0">$499.00</h5>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                    </div>
                  </div>
                </div>
              </div>
      
              <div class="card mb-4">
                <div class="card-body p-4 d-flex flex-row">
                  <div class="form-outline flex-fill">
                    <input type="text" id="form1" class="form-control form-control-lg" />
                    <label class="form-label" for="form1">Discound code</label>
                  </div>
                  <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
                </div>
              </div>
      
              <div class="card">
                <div class="card-body">
                  <button style="background-color: #05796b; margin-bottom:10%; margin-left:5%; border-radius:5px; padding:10px;" type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </section> --}}
    
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
        .cards .cards-header{
            min-height: 20vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }
        .cards .card {
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
        }

        .cards .card .image {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cards .card .image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .cards .card .text {
            height: 100%;
            width: 100%;
            padding: 0 20px;
            display: flex;
            justify-content: center;
            flex-direction: column;
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
        }

        .cards .card .text h4 {
            font-size: 1.2vw;
            padding: 10px 0;
        }

        .cards .card .text p {
            font-size: 0.74vw;
            padding: 0;
        }

        .cards .card .order {
            height: 100%;
            width: 100%;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cards .card .order a {
            border: 1px solid #05796b;
            padding: 7px 15px;
            font-size: 17px;
            color: white;
            background: #05796b;
            transition: .5s color, .5s background;
        }

        .cards .card .order a:hover {
            color: #05796b;
            background: transparent;
        }

        .cards .card .order p {
            color: #05796b;
        }

        /* products cards  */
</style>