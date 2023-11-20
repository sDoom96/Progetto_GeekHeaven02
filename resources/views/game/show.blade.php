<x-layout>
    
    <div class="margin-custom container-fluid">
        <div class="row">
            <h1 class=" text-center">
                {{$game->title}}
            </h1>
            <div class="col-12 d-flex justify-content-center">
                <div class="card m-5 border-0" style="width: 90rem;">
                    <img src="{{Storage::url($game->img)}}" class="card-img-top  ImgCustom" alt="Immagine del Gioco">
                    <div class="card-body">
                        <p class="card-text">
                            <em> {{$game->year}}, {{$game->develope}}</em>
                        </p>
                        <p class="card-text">Categoria: <strong>{{$game->category->name}}</strong>
                        </p>
                        <p class="card-text">
                            {{$game->description}}</p>
                            <a href="{{route('game.index')}}" class="btn btn-primary">Torna indietro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>