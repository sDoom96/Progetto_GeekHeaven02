<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//!rotta home
Route::get('/',[PublicController::class,'home'])->name('home');


//! rotte per la creazione dei giochi
//?CREATE e POST
Route::get('/games/create',[GameController::class,'create'])->name('game.create');
Route::post('/games/store',[GameController::class,'store'])->name('game.store');


//!rotta per la visualizzazione del catalogo dei giochi
Route::get('/games/index',[GameController::class,'index'])->name('game.index');


//! Rotta per la Pagina al dettaglio
Route::get('/games/show/{game}',[GameController::class, 'show'])->name('game.show');


//! Rotte per la modifica dei giochi
Route::get('/games/edit/{game}',[GameController::class, 'edit'])->name('game.edit');
Route::put('/games/update/{game}',[GameController::class, 'update'])->name('game.update');


//! Rotta per l'eliminazione dei giochi
Route::delete('/games/delete/{game}',[GameController::class, 'destroy'])->name('game.destroy');


//? Rotta test per livewire
Route::get('/test',function () {
    return view('test');
});