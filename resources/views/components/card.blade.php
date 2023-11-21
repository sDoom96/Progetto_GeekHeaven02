<div class="d-flex flex-column align-items-center justify-content-center {{-- align-items-start --}} mt-5 pt-5 col-4">
    <div class=" border-r border-1 rounded-4 card" style="width: 30rem;">
        <div class="img-card-container">
            {{-- <div class="prova"></div> --}}
        <img src="{{Storage::url($game->img)}}" class="rounded-top-4 card-img-top "
        alt="...">
        </div>

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