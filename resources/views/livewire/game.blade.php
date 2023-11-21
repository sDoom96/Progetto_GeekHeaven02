<div>
    <h1>create di livewire</h1>
        <form @if($check_update==1) wire:submit.prevent='update({{$itemEdit->id}})' @else wire:submit.prevent='store'@endif>
            
            {{-- TITOLO --}}
            <div class="mb-3">
                <label for="title" class="form-label">Nome</label>
                <input type="text" title="title" class="form-control" id="title" wire:model='title'>
                @error('title')
                    <p class="danger" >{{$message}}</p>
                @enderror
            </div>
            
            {{-- ANNO --}}
            <div class="mb-3">
                <label for="year" class="form-label">Anno</label>
                <input type="string" name="year" class="form-control" id="year" wire:model='year'>
                @error('year')
                <p class="danger" >{{$message}}</p>
                @enderror
            </div>
            
            {{-- SVILUPPATORE --}}
            <div class="mb-3">
                <label for="develope" class="form-label">Sviluppatore</label>
                <input type="text" develope="develope" class="form-control" id="develope" wire:model='develope'>
                @error('develope')
                    <p class="danger" >{{$message}}</p>
                @enderror
            </div>

            {{-- DESCRIZIONE --}}
            <div class="mb-3">
                <label for="description" class="form-label">descrizione</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="10" wire:model='description'></textarea>
                @error('description')
                    <p class="danger" >{{$message}}</p>
                @enderror
            </div>
            
            {{-- CATEGORIE --}}
            <div class="mb-3">
                <label for="category_id">Caegoria</label>
                <select name="category_id" id="category_id" wire:model='category_id'>
                    <option selected value='0'>scegli la categoria</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="danger" >{{$message}}</p>
                @enderror
            </div>
    
            {{-- PULSANTE --}}
            <button type="submit" class="btn btn-primary">@if($check_update==1) UPDATE @else CREA NUOVO @endif</button>
        </form>

        <div class="container">
            <div class="row">
        @foreach ($games as $game)
                <div class="col-1">
                    <p>{{$game->name}} {{$game->price}}</p>
                    <button wire:click='edit({{$game->id}})'>edit</button>
                    <button wire:click='delete({{$game->id}})'>delete</button>
                </div>
                @endforeach
            </div>
        </div>
</div>
