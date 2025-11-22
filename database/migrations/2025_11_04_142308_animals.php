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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['lost', 'found','reunited'])->default('lost')->comment('Ztracené, nalezené.');
            $table->date('report_date')->comment('Datum, kdy bylo zvíře ztraceno/nalezeno.');
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null')->comment('Cizí klíč na tabulku uživatelů/nahlásitelů.');
            $table->string('name', 100)->comment('Jméno zvířete (pokud je známo).');
            $table->string('species', 50)->comment('Druh zvířete (pes, kočka, apod.).');
            $table->string('breed', 100)->nullable()->comment('Plemeno nebo popis křížence.');
            $table->enum('sex', ['male', 'female', 'unknown'])->default('unknown');
            $table->string('location_city', 100)->comment('Město ztráty/nálezu.');
            $table->string('location_region', 100)->nullable()->comment('Kraj pro snadnější filtrování.');
            $table->text('description')->comment('Podrobný popis zvířete a okolností.');
            $table->string('image_path', 255)->nullable()->comment('Cesta k hlavní fotografii pro náhled.');
            $table->timestamps(); // creates created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
