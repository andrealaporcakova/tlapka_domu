<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animal_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_id')->constrained('animals')->onDelete('cascade')->comment('Cizí klíč k tabulce animals.');
            $table->string('path', 255)->comment('Cesta k souboru fotografie.');
            $table->boolean('is_main')->default(false)->comment('Zda se jedná o hlavní fotografii.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_photos');
    }
};
