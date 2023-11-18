<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $games = Game::all();
        return view('game.index',compact('games'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('game.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('img');

        Game::create([
            'title'=> $request->title,
            'year'=> $request->year,
            'develope'=> $request->develope,
            'description'=> $request->description,

            'img'=> $file ? $file->store('public/images') : 'public/images/default.png',
            'category_id'=> $request->category_id,
        ]);
        return redirect()->route('game.create')->with('success','gioco inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view ('game.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $categories = Category::all();
        return view ('game.edit', compact('game', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $file = $request->file('img');
        $game->update([
            'year'=> $request->year,
            'develope'=> $request->develope,
            'description'=> $request->description,
            'category_id'=> $request->category_id,
        ]);
        if ($file){
            Storage::delete($game->img);
            $game->img = $file->store('/public/image');
            $game->save();
        }
        return redirect()-> route("game.index", compact('game'))->with('success', ' il gioco è aggionrato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game -> delete();
        Storage::delete($game->img);
        return redirect()-> route("game.index");
    }
}
