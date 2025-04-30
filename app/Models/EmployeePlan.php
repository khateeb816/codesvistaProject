<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePlan extends Model
{
    use HasFactory;

    // Define the table name (optional if it follows Laravel's convention)
    protected $table = 'employee_plans';

    // Define the fields that can be mass-assigned
    protected $fillable = [
        'plan_name',
        'plan_amount',
        'valid_for_days',
        'max_jobs_allowed',
        'supports_featured_job',
        'allowed_featured_jobs',
        'featured_job_amount',
        'featured_employer_amount',
    ];

    // Optionally, if you have date fields like 'created_at' and 'updated_at'
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    // Specify any custom casting for attributes
    protected $casts = [
        'plan_amount' => 'decimal:2',
        'featured_job_amount' => 'decimal:2',
        'featured_employer_amount' => 'decimal:2',
    ];
}
