<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LabTest>
 */
class LabTestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word,
            'category_id' => Category::inRandomOrder()->first()->id,
            'shortName' => fake()->word,
            'description' => fake()->sentence
            'price' => fake()->randomFloat(nbMaxDecimals: 2, max: 10000)
        ];
    }
}
