<?php

namespace Database\Factories;

use App\Models\PackageCategory;
use App\Models\PackageType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestPackage>
 */
class TestPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           "name" => $this->faker->word,
           "description" => $this->faker->sentence,
           "price" => $this->faker->randomFloat(min: 100),
           // "type" => $this->faker->word,
           "theme" => $this->faker->colorName,
           "icon" => $this->faker->word,
           "package_category_id" => PackageCategory::inRandomOrder()->first()->id,
           "package_type_id" => PackageType::inRandomOrder()->first()->id,
           "comment" => $this->faker->sentence
        ];
    }
}
