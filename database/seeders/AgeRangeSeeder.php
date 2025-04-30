<?php

namespace Database\Seeders;

use App\Models\AgeRange;
use Illuminate\Database\Seeder;

class AgeRangeSeeder extends Seeder
{
    public function run()
    {
        AgeRange::create(['name' => '18 Years To 30 Years']);
        AgeRange::create(['name' => '31 Years To 45 Years']);
        AgeRange::create(['name' => '45 Years To 55 Years']);
        AgeRange::create(['name' => '55 Years To 65 Years']);
    }
}
