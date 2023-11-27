<?php

namespace Database\Seeders;

use App\Models\TestPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestPackage::factory()->count(20)->create();
    }
}
