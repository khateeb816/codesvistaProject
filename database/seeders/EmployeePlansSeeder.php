<?php

namespace Database\Seeders;

use App\Models\EmployeePlan;
use Illuminate\Database\Seeder;

class EmployeePlansSeeder extends Seeder
{
    public function run()
    {
        EmployeePlan::create([
            'plan_name' => 'plan 1',
            'plan_amount' => 3.00,
            'valid_for_days' => 423,
            'max_jobs_allowed' => 3,
            'supports_featured_job' => true,
            'allowed_featured_jobs' => 3,
            'featured_job_amount' => 34.00,
            'featured_employer_amount' => 4.00
        ]);

        EmployeePlan::create([
            'plan_name' => 'plan 2',
            'plan_amount' => 3.00,
            'valid_for_days' => 423,
            'max_jobs_allowed' => 3,
            'supports_featured_job' => false,
            'allowed_featured_jobs' => 3,
            'featured_job_amount' => 34.00,
            'featured_employer_amount' => 4.00
        ]);
    }
}
