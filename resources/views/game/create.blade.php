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


                <form class="form-custom" method="POST" action="{{route('game.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="fs-3 form-label">
                            Titolo
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                    </div>
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                    <div class="mb-3">
                        <label for="year" class="fs-4 form-label">
                            Anno
                        </label>
                        <input type="number" class="form-control" id="year" name="year" value="{{old('year')}}">
                        @error('year')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="develope" class="fs-4 form-label">
                            Casa di Sviluppo
                        </label>
                        <input type="text" class="form-control" id="develope" name="develope" value="{{old('develope')}}">
                        @error('develope')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- DESCRIZIONE --}}
                    <div class="mb-3">
                        <label for="description" class="fs-4">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>
                        @error('description')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- CATEGORIA --}}
                    <div class="mb-3 form-check">
                        <label for="category_id" class="form-label text-center">Categoria</label>
                        <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
                            <option disabled selected>Seleziona la Categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- IMMAGINE --}}
                    <div class="my-5 mb-3">
                        <label class="fs-4 form-label" for="img">
                            Inserisci l'immagine
                        </label>
                        <input type="file" name="img" id="img" class="fom-label form-control">
                    </div>

                    {{-- GIF --}}
                    <div class="my-5 mb-3">
                        <label class="fs-4 form-label" for="gif">
                            Inserisci la gif
                        </label>
                        <input type="file" name="gif" id="gif" class="fom-label form-control">
                    </div>

                    {{-- INVIO DATI --}}
                    <button type="submit" class="btn btn-primary">
                        Invia
                    </button>

                </form>

            </div>
        </div>
    </div>


</x-layout>