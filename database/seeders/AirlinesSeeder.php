<?php

namespace Database\Seeders;

use App\Models\Airlines;
use Illuminate\Database\Seeder;

class AirlinesSeeder extends Seeder
{
    public function run()
    {
        Airlines::create([
            'name' => 'PIA',
            'description' => '12th agust take Off'
        ]);
    }
}
