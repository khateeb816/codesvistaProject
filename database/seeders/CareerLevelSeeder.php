<?php

namespace Database\Seeders;

use App\Models\CarrerLevel;
use Illuminate\Database\Seeder;

class CareerLevelSeeder extends Seeder
{
    public function run()
    {
        CarrerLevel::create(['name' => 'Students']);
        CarrerLevel::create(['name' => 'Freshers']);
    }
}
