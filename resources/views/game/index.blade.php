<x-layout>
    <header class="">
        <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner position-relative">
                <div class="carousel-item active">
                    <img src="/media/images/mario.bros.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/media/images/cyberpunk_2077_2020_game_4k_8k-1920x1080.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/media/images/modern warfare III.jpeg" class="d-block w-100" alt="...">

                </div>
                <div class="background-custom" >
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
            <div class="d-flex flex-column justify-content-center {{-- align-items-start --}} mt-5 pt-5 col-4">
                <div class=" border-r border-1 rounded-4 card" style="width: 30rem;">
                    <img src="{{Storage::url($game->img)}}" class="rounded-top-4 card-img-top" alt="...">

                    <div class="p-0 rounded-bottom-4 bg-gradient card-body">
                        <div class="d-flex justify-content-between align-items-center col-12">
                        <h5 class=" fs-5 ms-5 m-4 card-title">{{$game->title}}</h5>
                        <p class=" m-4 fs-xs card-text">{{$game->year}}</p>
                        <p class="m-5 fs-xs card-text">{{$game->category->name}}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="{{route('game.show', compact('game'))}}" class="m-3 btn btn-primary">Leggi</a>
                </div>
                <div>
                    <a href="{{route('game.edit', compact('game'))}}" class="m-3 btn  btn-warning">Modifica</a>
                </div>
                <form method="POST" action="{{route('game.destroy', compact('game'))}}">
                @csrf
                @method('delete')
                    <button type="submit" class="m-3 btn btn-danger">Elimina</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>