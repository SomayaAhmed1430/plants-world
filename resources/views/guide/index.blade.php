<head>
    <link rel="stylesheet" href="{{ asset('css/guide/index.css') }}">
    <title>Plant World | Guide | Contact Us</title>
    <link
            rel="shortcut icon"
            href="{{ asset('assets/FaveIcon.svg') }}"
            type="image/x-icon"
        />
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
    <div class="home">
        <div class="title">
            <div class="title-con">Plants Guideing</div>
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
                <div>guiding</div>
            </li>
            <li>
                <div>&</div>
            </li>
            <li>
                <div>caring</div>
            </li>
            <li>
                <div>of</div>
            </li>
            <li>
                <div>Green</div>
            </li>
            <li>
                <div>Plants</div>
            </li>
        </h1>
        <div class="home-pharagraph">
            <p>One place for all your gardening needs.</p>
        </div>
    </div>
    <!-- home  -->

    <div class="parallaxed">
        <div class="parallax">
            <img data-u-scale="1.2" data-u-speed="2" data-parallax 
            src="{{ asset('assets/Plants Guide.jpg') }}" alt="" />
        </div>
    </div>
    <!-- parallaxed img  -->

    <div class="howto">
        <h3>What are indoor plants?</h3>
        <p>
            Indoor plants are plants that grow indoors. There are a variety
            of tropical plants, like palms, that thrive in indoor
            environments.
        </p>
        <h3>How do you plant indoor plants?</h3>
        <p>
            Most of the time, indoor plants are already in containers, so
            there is no need to plant them. There are typically only two
            reasons you need to plant an indoor plant.
        </p>
        <ul>
            <li>
                1 - If your plant is getting too big, then you will need to
                replant it into a larger container.
            </li>
            <li>
                2 - If you wanted to grow bulbs indoors, then you will need
                to plant the bulbs yourself.
            </li>
        </ul>
        <h3>How much light do indoor plants need?</h3>
        <p>
            Succulents and cacti need continuous, daily sunlight. Plants
            with foliage need roughly 8 hours of light per day. The amount
            of light depends on the plants you are growing, so we suggest
            doing research on the specific plants you are growing.
        </p>
        <h3>What qualities make for a good indoor plant?</h3>
        <p>
            There are several qualities to look for when selecting an indoor
            plant.
        </p>
        <ul>
            <li>
                1 - A good root system – This is incredibly important when
                choosing a plant. It’s not practical to pull a plant out of
                its pot to check its roots but if it is a small plant, this
                can be done. Healthy roots are thick and light in color.
            </li>
            <li>
                2 - Foliage- Here’s a good rule of thumb when it comes to
                plant foliage: if you can’t see through it, the foliage is
                thick enough.
            </li>
            <li>
                3 - Check for disease – Some signs of a plant with pests or
                disease are: white dots, sticky residue on the leaves and a
                bad odor.
            </li>
        </ul>
        <h3>Which indoor plants require low light?</h3>
        <p>
            Indoor plants that need little light could be good fits for
            locations where light is dimmer. Some plants that require low
            light are:
        </p>
        <ul>
            <li>
                - Philodendron – A very common indoor plant that rarely
                attracts pests. It’s a hearty plant that is adaptable to
                various environments
            </li>
            <li>
                - Pothos or Devil’s Ivy- A plant with colorful and vibrant
                leaves. This plant does great in a variety of environments,
                thriving in low light or in bright, indirect light.
            </li>
            <li>
                - Dracaena– This is another popular indoor plant with long
                green leaves. This is one indoor plant you will want to
                prune if foliage gets too long.
            </li>
            <li>
                - Peace Lily- This plant thrives best when the soil is
                moist, but not overwatered. If you want flowers to appear on
                your peace lily plant, move your plant to a darker room.
            </li>
        </ul>
        <h3>Which indoor plants are the easiest to take care of?</h3>
        <p>
            Below is a list of indoor plants that are easy to take care of:
        </p>
        <ul>
            <li>- Sansevieria</li>
            <li>- Philodendron</li>
            <li>- Most succulents</li>
            <li>- Pothos</li>
            <li>- ZZ plant</li>
        </ul>
        <div class="load">
            <a href="https://www.gardenersworld.com/how-to/grow-plants/gardening-for-beginners-how-to-plant/">Load More Guiding</a>
        </div>
    </div>
    <!-- How To -->

    <div class="comments">
        <div class="comments-header">
            <h1>Tell us in the comment, How we can help you!</h1>
            <p>
                Here you can write your feedback about this site and asking
                any quistion you want.
            </p>
        </div>
        <form action="{{ route('comment.store') }}" method="POST">
            @csrf
            {{-- <input autocomplete="off" id="username" placeholder="Enter your username" />
            <input id="email" type="email" placeholder="Enter your email" /> --}}
            <textarea id="textarea" name="comment" placeholder="Write your message here"></textarea>
            <input id="submit" type="submit" value="Submit my comment" disabled>
        </form>
        <div class="comments-con"></div>
    </div>
    <!-- contact -->
    <script src="{{ asset('js/guide.js') }}"></script>
</x-guest-layout>
