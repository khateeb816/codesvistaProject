<?php

namespace Database\Seeders;

use App\Models\Cities;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    public function run()
    {
        Cities::create(['name' => 'Lahor']);
        Cities::create(['name' => 'Islamabad']);
        Cities::create(['name' => 'Peshawar']);
    }
}
