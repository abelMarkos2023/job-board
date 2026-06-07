<?php

namespace Database\Factories;

use App\Models\Occupation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Occupation>
 */
class OccupationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(3),
            'salary' => fake()->numberBetween(100000, 1000000),
            'location' => fake()->city(),
            'category' => fake()->randomElement(Occupation::$categories),
            'type' => fake()->randomElement(Occupation::$types),
            'experience' => fake()->randomElement(Occupation::$experiences),
        ];
    }
}
