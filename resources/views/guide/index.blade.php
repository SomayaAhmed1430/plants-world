<x-guest-layout>
    <div class="home">
        <div class="title">
            <div class="title-con">Plants Guideing</div>
        </div>
        <h1>
            <li><div>This</div></li>
            <li><div>is</div></li>
            <li><div>all</div></li>
            <li><div>about</div></li>
            <li><div>guiding</div></li>
            <li><div>&</div></li>
            <li><div>caring</div></li>
            <li><div>of</div></li>
            <li><div>Green</div></li>
            <li><div>Plants</div></li>
        </h1>
        <div class="home-pharagraph">
            <p>One place for all your gardening needs.</p>
        </div>
    </div>
    <!-- home  -->

    <div class="form">
        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
    </div>
    <!-- contact -->
</x-guest-layout>

<style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
    .home .title .title-con{
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
    .home h1 li:nth-of-type(7):after,
    .home h1 li:nth-of-type(7) div {
        animation-delay: 0.6s;
    }
    .home h1 li:nth-of-type(8):after,
    .home h1 li:nth-of-type(8) div {
        animation-delay: 0.65s;
    }
    .home h1 li:nth-of-type(9):after,
    .home h1 li:nth-of-type(9) div {
        animation-delay: 0.7s;
    }
    .home h1 li:nth-of-type(10):after,
    .home h1 li:nth-of-type(10) div {
        animation-delay: 0.75s;
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
</style>