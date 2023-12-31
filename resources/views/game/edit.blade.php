<x-layout>
    <div class="container">
        <div class="row">
            <div class="m-5 col-12">

                @if(session()->has('success'))
                <div class="alert-success alert">
                    <p>
                        {{session('success')}}
                    </p>
                </div>
                @endif


                <form class="form-custom" method="POST" action="{{route('game.update', compact('game'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="title" class="fs-3 form-label">
                            Titolo
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$game->title}}">
                    </div>

                    <div class="mb-3">
                        <label for="year" class="fs-4 form-label">
                            Anno
                        </label>
                        <input type="number" class="form-control" id="year" name="year" value="{{$game->year}}">
                    </div>

                    <div class="mb-3">
                        <label for="develope" class="fs-4 form-label">
                            Casa di Sviluppo
                        </label>
                        <input type="text" class="form-control" id="develope" name="develope" value="{{$game->develope}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="fs-4">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$game->description}}</textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <label for="category_id" class="form-label text-center">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
                            <option disabled selected>Seleziona la Categoria</option>
                            @foreach ($categories as $category)
                            <option
                            @if ($category->id == $game->category_id)
                                selected
                            @endif
                            value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-5 mb-3">
                        <label class="fs-4 form-label" for="img">
                            Inserisci l'immagine
                        </label>
                        <input type="file" name="img" id="img" class="fom-label form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Invia
                    </button>

                </form>

            </div>
        </div>
    </div>


</x-layout>