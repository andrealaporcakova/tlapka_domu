<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $status = $this->faker->randomElement(['lost', 'found']);
        $species = $this->faker->randomElement(['pes', 'kocka', 'ptak', 'ostatni']);
        $sex = $this->faker->randomElement(['male', 'female', 'unknown']);

        return [
            'status' => $status,
            'species' => $species,
            'name' => $this->faker->firstName($sex === 'male' ? 'male' : 'female'),
            'breed' => $this->faker->words(2, true),
            'sex' => $sex,
            'location_city' => $this->faker->city(),
            'location_region' => $this->faker->randomElement(['ustecky', 'jihomoravsky', 'praha']),
            'report_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'description' => $this->faker->paragraph(3),
            'image_path' => 'images/placeholders/' . $species . '.jpg',
            'user_id' => null,
            'guest_email' => $this->faker->email(),
            'guest_phone' => $this->faker->phoneNumber(),
        ];
    }
}
