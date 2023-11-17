<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

//! cambiare le vategorie in basso

        $categories = ['Aberrazione','Bestia','Clestiale','Costrutto','Drago','Elementale','Fatato','Gigante','Immondo','Melma','Mostruosità','Non morto','Pianta','Umanoide'];
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
