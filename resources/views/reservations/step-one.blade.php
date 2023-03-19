<x-guest-layout>
    <div class="reservation">
        <div class="reservation-con">
            <div class="image">
                <img src="{{ asset('assets/pexels-markus-spiske-113335.jpg') }}" alt="">
            </div>
            <form action="{{ route('reservations.store.step.one') }}" method="POST">
                @csrf
                <h4>Make Order</h4>
                <div class="step"></div>
                <div>
                    <input type="text" name="first_name" id="first_name" value="{{ $reservation->first_name ?? '' }}" placeholder="First Name">
                    @error('first_name')
                        <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                    @enderror
                </div>
                <div>
                    <input type="text" name="last_name" id="last_name" value="{{ $reservation->last_name ?? '' }}" placeholder="Last Name">
                    @error('last_name')
                        <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                    @enderror
                </div>
                <div>
                    <input type="email" name="email" id="email" value="{{ $reservation->email ?? '' }}" placeholder="Email">
                    @error('email')
                        <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                    @enderror
                </div>
                <div>
                    <input type="text" name="tel_number" id="tel_number" value="{{ $reservation->tel_number ?? '' }}" placeholder="Phone Number">
                    @error('tel_number')
                        <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                    @enderror
                </div>
                <div>
                    <input type="datetime-local" name="res_date" id="res_date" value="{{ $reservation->res_date ?? '' }}" placeholder="Reservation Date">
                    @error('res_date')
                        <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                    @enderror
                </div>
                <div>
                    <input type="number" name="guest_number" id="guest_number" value="{{ $reservation->guest_number ?? '' }}" placeholder="Order Amount">
                    @error('guest_number')
                        <a style="color: red" class="text-sm text-red-400">{{ $message }}</a>
                    @enderror
                </div>
                <div class="next">
                    <a href="{{ route('reservations.step.two') }}" class="btn" type="submit">Next</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

<style>
    .reservation {
        min-height: 100vh;
        width: 110%;
        transform: translateX(-5%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: var(--page--padding);
        overflow: hidden;
    }

    .reservation .reservation-con {
        height: 650px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        overflow: hidden;
        box-shadow: 0 0 50px #ddd;
        border-radius: 10px;
        background-color: #e9edff;
    }

    .reservation .reservation-con .image {
        height: 100%;
        width: 100%;
    }

    .reservation .reservation-con .image img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .reservation .reservation-con form {
        height: 100%;
        width: 100%;
        padding: 10px 9% 10px 7%;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .reservation .reservation-con form h4 {
        font-size: var(--h2--);
        color: #05796b;
    }

    .reservation .reservation-con form .step {
        position: relative;
        height: 30px;
        width: 100%;
        margin: 20px 0px;
        background: #ddd;
        border-radius: 1000px;
        overflow: hidden;
        background: #b2d2d9;
    }

    .reservation .reservation-con form .step::after {
        content: 'Step 1';
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50%;
        height: 100%;
        font-size: 13px;
        border-radius: 1000px;
        background: #05796b;
        color: #fff;
    }

    .reservation .reservation-con form input {
        margin: 10px 0;
        height: 40px;
        width: 100%;
    }
    .reservation .reservation-con form input {
        background: #e9edff;
        height: 40px;
        border: none;
        outline: none;
        border-bottom: 1px solid #b2d2d9;
        transition: .5s color, .5s border;
    }

    .reservation .reservation-con form input:hover {
        border-bottom: 1px solid #05796b;
    }

    .reservation .reservation-con form input::placeholder {
        color: #b2d2d9;
        transition: .5s color, .5s border;
    }

    .reservation .reservation-con form input:hover::placeholder {
        color: #05796b;
    }

    .reservation .reservation-con form input:focus {
        border-bottom: 1px solid #05796b;
        transition: .5s color, .5s border;
        --tw-ring-color: #0000;
    }

    .reservation .reservation-con form input:focus::placeholder {
        color: #05796b;
        transition: .5s color, .5s border;
    }

    .reservation .reservation-con form .next {
        width: 100%;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: end;
    }

    .reservation .reservation-con form .next a {
        height: 50px;
        width: 120px;
        border: 1px solid #05796b;
        color: #05796b;
        cursor: pointer;
        font-size: unset;
        border-radius: 10px;
        transition: .5s background, .5s color;
    }

    .reservation .reservation-con form .next a:hover {
        color: #fff;
        background: #05796b;
    }
</style>
