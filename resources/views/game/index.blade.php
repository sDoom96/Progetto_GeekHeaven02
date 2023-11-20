<x-layout>
    <header class="">
        <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner position-relative">
                <div class="carousel-item active carousel-size">
                    <img src="/media/images/mario.bros.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item carousel-size">
                    <img src="/media/images/cyberpunk_2077_2020_game_4k_8k-1920x1080.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item carousel-size">
                    <img src="/media/images/modern warfare III.jpeg" class="d-block w-100" alt="...">

                </div>
                <div class="" >
                    <div class="vh-100"></div>
                    </div>

            </div>
        </div>
    </header>
    <div class="container-fluid background-custom">

    </div>

    <h1 class="text-center mt-5">I Giochi del Momento</h1>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            @foreach($games as $game)
            <x-card  :game='$game' />
            @endforeach
        </div>
    </div>


        </iframe>
    </div>

</x-layout>