<?php

namespace Database\Seeders;

use App\Models\Animal; // Import modelu
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 20 records using AnimalFactory
        Animal::factory()->count(20)->create();
    }
}
