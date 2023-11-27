<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // if(count(User::all()) > 0) {
        //     User::create([
        //         'name' => 'testuser',
        //         'email' => 'user@test.com',
        //         'password' => Hash::make('testuser')
        //     ]);
        // }
        $this->call([
            CategorySeeder::class,
            PackageCategorySeeder::class,
            PackageTypeSeeder::class,
            TestPackageSeeder::class,
            LabTestSeeder::class,
            TestEntrySeeder::class,
            FaqSeeder::class,
        ]);
    }
}
