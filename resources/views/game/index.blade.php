<x-layout>
    <header class="">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/media/images/mario.bros.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/media/images/cyberpunk_2077_2020_game_4k_8k-1920x1080.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/media/images/modern warfare III.jpeg" class="d-block w-100" alt="...">
                </div>
                
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            @foreach($games as $game)
            <div class=" mt-5 pt-5 col-12">
                <div class="card" style="width: 30rem;">
                    
                    <img src="{{Storage::url($game->img)}}" class="rounded-top-4 card-img-top" alt="...">
                    
                    <div class="rounded-bottom-4 bg-gradient card-body">
                        <div class="d-flex justify-content-around align-items-center col-12">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <p class="card-text">{{$game->year}}</p>
                        <p class="card-text">{{$game->category->name}}</p>
                        <a href="#" class="btn btn-primary">Leggi</a>
                    </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>