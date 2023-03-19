<x-guest-layout>
    <div class="cards">
        <h1>Thank You</h1>
        <p>Your Reservation Is Ready.</p>
    </div>

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
            overflow: visible;
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
            transition: .5s transform, .5s box-shadow
        }

        .cards .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px #808080;
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
</x-guest-layout>
