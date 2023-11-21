<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use App\Models\Game as GameModel;

class Game extends Component
{
    use WithFileUploads;
    public $title;
    public $year;
    public $develope;
    public $description;
    public $category_id;

    public $check_update=0;
    public $gameEdit=0;

    protected $rules=[
        'title' => 'required|max:255',
        'year' => 'required|max_digits:4',
        'develope' => 'required|max:255',
        'description' => 'required|min:100|max:500'
    ];

    public function store(){

        $this->validate();
        
        GameModel::create([
            'title'=>$this->title,
            'year'=>$this->year,
            'develope'=>$this->develope,
            'description'=>$this->description,
            'category_id'=>$this->category_id,
        ]);
        $this->reset();
    }
    public function edit(GameModel $game){
        $this->title = $game->title;
        $this->year = $game->year;
        $this->develope = $game->develope;
        $this->description = $game->description;
        $this->category_id = $game->category_id;        
        $this->gameEdit = $game;
        
        $this->check_update=1;
    }
    
    public function update(GameModel $game){

        $this->validate();

        $this->gameEdit->update([
            'title' => $this->title,
            'year' => $this->year,
            'develope' => $this->develope,
            'description' => $this->description,
            'category_id' => $this->category_id,
        ]);
        
        $this->check_update=0;

        $this->reset();
    }

    public function delete(GameModel $game){
        $game->delete();
    }
    public function render()
    {
        $categories=Category::all();
        $games=GameModel::all();

        return view('livewire.game',compact('categories','games'));
    }
}
