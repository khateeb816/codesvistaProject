<?php

namespace Database\Seeders;

use App\Models\EducationLevel;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    public function run()
    {
        EducationLevel::create(['name' => 'Graduated']);
        EducationLevel::create(['name' => 'Highly Qualifieds']);
    }
}
