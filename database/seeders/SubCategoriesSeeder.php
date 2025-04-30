<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategoriesSeeder extends Seeder
{
    public function run()
    {
        SubCategory::create([
            'main_category' => 'Doctor',
            'sub_category' => 'surgen'
        ]);

        SubCategory::create([
            'main_category' => 'Doctor',
            'sub_category' => 'surgen'
        ]);
    }
}
