<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\AgeRangeSeeder;
use Database\Seeders\AirlinesSeeder;
use Database\Seeders\CareerLevelSeeder;
use Database\Seeders\CitiesSeeder;
use Database\Seeders\EducationCategoriesSeeder;
use Database\Seeders\EducationLevelSeeder;
use Database\Seeders\EmployeePlansSeeder;
use Database\Seeders\SubCategoriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AgeRangeSeeder::class,
            AirlinesSeeder::class,
            CareerLevelSeeder::class,
            CitiesSeeder::class,
            EducationCategoriesSeeder::class,
            EducationLevelSeeder::class,
            EmployeePlansSeeder::class,
            SubCategoriesSeeder::class,
        ]);

        // User::factory(10)->create();

        User::factory()->admin()->create([
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => bcrypt('123456'),
            'first_name' => 'Test',
            'last_name' => 'User'
        ]);
    }
}
