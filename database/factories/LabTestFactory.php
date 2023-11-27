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
            'name' => $this->faker->word,
            'category_id' => Category::inRandomOrder()->first()->id,
            'shortName' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(min: 300, nbMaxDecimals: 2),
            // 'icon' => $this->faker->word,
            // 'image' => $this->faker->imageUrl
        ];
    }
}
