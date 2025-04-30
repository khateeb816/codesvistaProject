<?php

namespace Database\Seeders;

use App\Models\EducationCategories;
use Illuminate\Database\Seeder;

class EducationCategoriesSeeder extends Seeder
{
    public function run()
    {
        EducationCategories::create(['name' => 'Primary']);
    }
}
