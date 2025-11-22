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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Pro "Max se vrátil..."
            $table->string('category'); // Pro "Pes / Praha"
            $table->text('excerpt'); // Pro krátký popisek
            $table->string('image_path'); // Pro "images/missing_dog.webp"
            $table->string('url')->default('#'); // Pro odkaz "Číst celý příběh"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
