<?php

namespace Database\Factories;

use App\Models\LabTest;
use App\Models\TestPackage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestEntry>
 */
class TestEntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'test_package_id' => TestPackage::inRandomOrder()->first()->id,
            'lab_test_id' => LabTest::inRandomOrder()->first()->id,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'comment'=> $this->faker->sentence
        ];
    }
}
