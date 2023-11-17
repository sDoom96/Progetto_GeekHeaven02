<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($game->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$game->title}}</h5>
                        <p class="card-text">{{$game->year}}</p>
                        <a href="#" class="btn btn-primary">Leggi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</x-layout>