<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

//! cambiare le categorie in basso

        $categories = ['FPS','RPG','JRPG','Avventura','OpenWord','Racing','Sport','Arcade','Indie','Action','Simulator','Horror','Survival','Party'];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
