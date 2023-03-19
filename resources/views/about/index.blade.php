<x-guest-layout>
    <div class="home">
        <div class="title">
            <div class="title-con">ABOUT US</div>
        </div>
        <h1>
            <li><div>Hello,</div></li>
            <li><div>We</div></li>
            <li><div>are</div></li>
            <li><div>plant</div></li>
            <li><div>world</div></li>
            <li><div>company</div></li>
        </h1>
        <div class="home-pharagraph">
            <p>One place for all your gardening needs.</p>
        </div>
    </div>
    <!-- home  -->

    <div class="parallaxed">
        <div class="parallax">
            <img
                data-u-scale="1.2"
                data-u-speed="2"
                data-parallax
                src="{{ asset('assets/about paralex.jpg') }}"
            />
        </div>
    </div>
    <!-- parallaxed img  -->

    <div class="mission">
        <div class="mission-con">
            <div class="mission-con-title">
                <h3>
                    <li><div>Our</div></li>
                    <li><div>Missions</div></li>
                </h3>
            </div>
            <div class="mission-con-text">
                <h1>
                    <li><div>Mashtal</div></li>
                    <li><div>Garden</div></li>
                    <li><div>Centers</div></li>
                    <li><div>aims</div></li>
                    <li><div>to</div></li>
                    <li><div>provide</div></li>
                    <li><div>novice</div></li>
                    <li><div>and</div></li>
                    <li><div>profssional</div></li>
                    <li><div>gardeners</div></li>
                    <li><div>in</div></li>
                    <li><div>Egypt</div></li>
                    <li><div>with</div></li>
                    <li><div>all</div></li>
                    <li><div>the</div></li>
                    <li><div>supplies,</div></li>
                    <li><div>equipments</div></li>
                    <li><div>and</div></li>
                    <li><div>informations</div></li>
                    <li><div>they</div></li>
                    <li><div>need</div></li>
                    <li><div>to</div></li>
                    <li><div>develop</div></li>
                    <li><div>and</div></li>
                    <li><div>enjoy</div></li>
                    <li><div>their</div></li>
                    <li><div>gardening</div></li>
                    <li><div>projects,</div></li>
                    <li><div>hope</div></li>
                    <li><div>we</div></li>
                    <li><div>develop</div></li>
                    <li><div>this</div></li>
                    <li><div>website</div></li>
                    <li><div>to</div></li>
                    <li><div>get</div></li>
                    <li><div>all</div></li>
                    <li><div>updates</div></li>
                    <li><div>about</div></li>
                    <li><div>plants</div></li>
                    <li><div>and</div></li>
                    <li><div>plants</div></li>
                    <li><div>caring,</div></li>
                    <li><div>for</div></li>
                    <li><div>the</div></li>
                    <li><div>love</div></li>
                    <li><div>of</div></li>
                    <li><div>gardening</div></li>
                    <li><div>we</div></li>
                    <li><div>are</div></li>
                    <li><div>agroup</div></li>
                    <li><div>of</div></li>
                    <li><div>people</div></li>
                    <li><div>that</div></li>
                    <li><div>are</div></li>
                    <li><div>passionate</div></li>
                    <li><div>about</div></li>
                    <li><div>trees.</div></li>
                </h1>
            </div>
        </div>
    </div>
    <!-- mission -->

    <div class="dev">
        <div class="dev-header">
            <h1>Our featured agents</h1>
            <p>Meet our amazing teem members</p>
        </div>
        <div class="dev-con">
            <div class="card">
                <div class="image">
                    <img
                        src="{{ asset('assets/me.jpg') }}"
                    />
                </div>
                <div class="text">
                    <h3>Somaya Ahmed</h3>
                    <h4>Back-End Dev</h4>
                    <a href="tel:01027476938">01027476938</a>
                    <a href="mailto:sosodeane143@gmail.com">sosodeane143@gmail.com</a>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img
                        src="{{ asset('assets/him.jpg') }}"
                    />
                </div>
                <div class="text">
                    <h3>Abdullah Ahmed</h3>
                    <h4>Front-End Dev</h4>
                    <a href="tel:01027476938">01200209895</a>
                    <a href="mailto:sjsuper872@gmail.com">sjsuper872@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="dev-portfolio">
            <a href="#">Visit Our Portfolio</a>
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
        color: red;
    }

    /* header */

    .home {
        min-height: 60vh;
        width: 100%;
        padding: var(--page--padding);
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-direction: column;
    }

    .home .title .title-con {
        font-weight: bolder;
        letter-spacing: 10px;
        transform: translateY(200px) rotate(50deg);
        animation: animation 2.5s ease forwards;
        animation-timing-function: cubic-bezier(0.75, 0.82, 0.165, 1);
        animation-delay: 0.1s;
        color: #05796b;
    }

    .home h1 {
        font-size: 3.5vw;
        line-height: 80%;
        overflow: hidden;
    }

    .home h1 li {
        position: relative;
        display: inline-block;
        padding: 5px;
        overflow: hidden;
    }

    .home h1 li::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: #e9edff;
        animation: animationsss 3.2s ease forwards;
        animation-delay: 0.3s;
    }

    .home h1 li div {
        transform: translateY(200px) rotate(10deg);
        padding: 25px 0px;
        animation: animation 3s ease forwards;
        animation-timing-function: cubic-bezier(0.75, 0.82, 0.165, 1);
        animation-delay: 0.3s;
    }

    .home h1 li:nth-of-type(2):after,
    .home h1 li:nth-of-type(2) div {
        animation-delay: 0.35s;
    }

    .home h1 li:nth-of-type(3):after,
    .home h1 li:nth-of-type(3) div {
        animation-delay: 0.4s;
    }

    .home h1 li:nth-of-type(4):after,
    .home h1 li:nth-of-type(4) div {
        animation-delay: 0.45s;
    }

    .home h1 li:nth-of-type(5):after,
    .home h1 li:nth-of-type(5) div {
        animation-delay: 0.5s;
    }

    .home h1 li:nth-of-type(6):after,
    .home h1 li:nth-of-type(6) div {
        animation-delay: 0.55s;
    }

    .home .home-pharagraph {
        position: relative;
        overflow: hidden;
    }

    .home p {
        transform: translateY(300px) rotate(20deg);
        animation: animation 3s ease forwards;
        animation-timing-function: cubic-bezier(0.75, 0.82, 0.165, 1);
        animation-delay: 0.6s;
    }

    /* home */

    .parallaxed {
        position: relative;
        height: 110vh;
        width: 100%;
        margin: auto;
    }

    .parallaxed::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: #e9edff;
        animation: parallax 3s ease forwards;
        animation-timing-function: cubic-bezier(0.41, 0.78, 0.17, 1);
        animation-delay: 2s;
        z-index: 1;
    }

    .parallax {
        min-height: 110vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: scale(1.5);
        opacity: 0;
        animation: parallax 2s ease forwards;
        animation-timing-function: cubic-bezier(0.41, 0.78, 0.17, 1);
        animation-delay: 2s;
    }

    .parallaxed img {
        height: 110vh;
        width: 100%;
    }

    @keyframes parallax {
        100% {
            transform: scale(1);
            opacity: 1;
            background: #00000044;
        }
    }

    /* parallaxed  */

    .mission {
        min-height: 50vh;
        width: 100%;
        padding: var(--page--padding);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .mission .mission-con {
        min-height: 30vh;
        width: 100%;
        display: grid;
        grid-template-columns: 25% 75%;
    }

    .mission .mission-con .mission-con-title h3 li {
        position: relative;
        display: inline-block;
        overflow: hidden;
    }

    .mission .mission-con .mission-con-title h3 li div {
        transform: translateY(200px) rotate(20deg);
        padding: 2px 0px;
        animation: animation 3s ease forwards;
        animation-timing-function: cubic-bezier(0.75, 0.82, 0.165, 1);
        animation-delay: .7s;
    }

    .mission .mission-con .mission-con-title h3 li:nth-of-type(2) div {
        animation-delay: .8s;
    }

    .mission .mission-con .mission-con-text h1 {
        padding: 5px;
        font-size: var(--p--);
        font-weight: lighter;
    }

    .mission .mission-con .mission-con-text h1 {
        color: #000;
    }

    .mission .mission-con .mission-con-text h1 li {
        position: relative;
        display: inline-block;
        overflow: hidden;
    }

    .mission .mission-con .mission-con-text h1 li div {
        transform: translateY(200px) rotate(10deg);
        padding: 2px 0px;
        animation: animation 3s ease forwards;
        animation-timing-function: cubic-bezier(0.75, 0.82, 0.165, 1);
        animation-delay: 1s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(2):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(2) div {
        animation-delay: 1.05s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(3):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(3) div {
        animation-delay: 1.07s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(4):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(4) div {
        animation-delay: 1.09s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(5):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(5) div {
        animation-delay: 1.11s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(6):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(6) div {
        animation-delay: 1.13s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(7):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(7) div {
        animation-delay: 1.15s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(8):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(8) div {
        animation-delay: 1.17s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(9):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(9) div {
        animation-delay: 1.19s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(8):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(8) div {
        animation-delay: 1.21s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(10):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(10) div {
        animation-delay: 1.23s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(11):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(11) div {
        animation-delay: 1.25s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(12):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(12) div {
        animation-delay: 1.27s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(13):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(13) div {
        animation-delay: 1.29s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(14):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(14) div {
        animation-delay: 1.31s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(15):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(15) div {
        animation-delay: 1.33s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(16):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(16) div {
        animation-delay: 1.35s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(17):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(17) div {
        animation-delay: 1.37s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(18):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(18) div {
        animation-delay: 1.39s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(19):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(19) div {
        animation-delay: 1.41s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(20):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(20) div {
        animation-delay: 1.43s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(21):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(21) div {
        animation-delay: 1.45s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(22):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(22) div {
        animation-delay: 1.47s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(23):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(23) div {
        animation-delay: 1.49s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(24):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(24) div {
        animation-delay: 1.51s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(25):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(25) div {
        animation-delay: 1.53s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(26):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(26) div {
        animation-delay: 1.55s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(27):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(27) div {
        animation-delay: 1.57s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(28):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(28) div {
        animation-delay: 1.59s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(29):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(29) div {
        animation-delay: 1.61s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(30):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(30) div {
        animation-delay: 1.63s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(31):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(31) div {
        animation-delay: 1.65s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(32):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(32) div {
        animation-delay: 1.67s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(33):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(33) div {
        animation-delay: 1.69s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(34):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(34) div {
        animation-delay: 1.71s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(35):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(35) div {
        animation-delay: 1.73s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(36):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(36) div {
        animation-delay: 1.75s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(37):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(37) div {
        animation-delay: 1.77s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(38):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(38) div {
        animation-delay: 1.79s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(39):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(39) div {
        animation-delay: 1.81s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(40):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(40) div {
        animation-delay: 1.83s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(41):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(41) div {
        animation-delay: 1.85s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(42):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(42) div {
        animation-delay: 1.87s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(43):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(43) div {
        animation-delay: 1.89s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(44):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(44) div {
        animation-delay: 1.91s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(45):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(45) div {
        animation-delay: 1.93s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(46):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(46) div {
        animation-delay: 1.95s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(47):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(47) div {
        animation-delay: 1.97s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(48):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(48) div {
        animation-delay: 1.99s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(49):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(49) div {
        animation-delay: 2.01s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(50):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(50) div {
        animation-delay: 2.03s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(51):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(51) div {
        animation-delay: 2.05s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(52):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(52) div {
        animation-delay: 2.07s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(53):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(53) div {
        animation-delay: 2.09s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(54):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(54) div {
        animation-delay: 2.11s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(55):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(55) div {
        animation-delay: 2.13s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(56):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(56) div {
        animation-delay: 2.15s;
    }

    .mission .mission-con .mission-con-text h1 li:nth-of-type(57):after,
    .mission .mission-con .mission-con-text h1 li:nth-of-type(57) div {
        animation-delay: 2.17s;
    }

    /* mission */

    .dev {
        min-height: 90vh;
        width: 100%;
        padding: var(--page--padding);
    }

    .dev .dev-header {
        min-height: 20vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        flex-direction: column;
    }

    .dev .dev-con {
        position: relative;
        min-height: 55vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dev .dev-con .card {
        height: 40vh;
        width: 32%;
        margin: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        transform: translateY(-50px);
        border-radius: 20px;
        box-shadow: 0 10px 20px #ddd;
        border: 1px solid #ddd;
    }

    .dev .dev-con .card:nth-child(2) {
        transform: translateY(50px);
    }

    .dev .dev-con .card .image {
        overflow: hidden;
        height: 150px;
        width: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100px;
    }

    .dev .dev-con .card .image img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .dev .dev-con .text {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .dev .dev-con .text a {
        text-decoration: underline;
    }

    .dev .dev-con .text h3 {
        padding: 20px 0;
    }

    .dev .dev-con .text h4 {
        font-size: var(--p--);
        padding: 0 0 20px 0;
    }

    .dev .dev-portfolio {
        min-height: 10vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: visible;
    }

    .dev .dev-portfolio a {
        padding: 1rem 2rem;
        color: #05796b;
        border: 1px solid #05796b;
        transition: .5s background, .5s color, .5s box-shadow;
    }

    .dev .dev-portfolio a:hover {
        color: #fff;
        background: #05796b;
        box-shadow: 0 10px 30px #ddd;
    }
</style>
