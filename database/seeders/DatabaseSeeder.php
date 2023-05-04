<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AdsBrand;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            ProfileSeed::class,
            GroupSeed::class,
            DepartmentSeed::class,
            CategorySeed::class,
            AdSeed::class,
            UsersGroupSeed::class,
            BrandSeeder::class,
            AdsBrandSeeder::class,
            // ReviewAdSeed::class,
        ]);
    }
}
