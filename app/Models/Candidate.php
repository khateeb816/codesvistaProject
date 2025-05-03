<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'username',
        'password',
        'candidate_type',
        'religion',
        'title',
        'wages_salary',
        'first_name',
        'material_status',
        'last_name',
        'education',
        'cnic',
        'profession',
        'father_name',
        'experience',
        'gender',
        'job_type',
        'date_of_birth',
        'job_applied_for',
        'age',
        'plan',
        'place_of_birth',
        'nationality',
        'address',
        'mobile',
        'email',
        'passport_number',
        'passport_issue_date',
        'passport_expiry_date',
        'passport_issue_place',
        'residence_country',
        'residence_state',
        'residence_province',
        'residence_district',
        'residence_city',
        'residence_zip',
        'residence_street',
        'residence_address',
        'alternate_phone',
        'emergency_contact',
        'website',
        'return_address',
        'police_case',
        'political_affiliation',
        'present_employment',
        'achievements',
    ];

    /**
     * Get the qualifications for the candidate.
     */
    public function qualifications()
    {
        return $this->hasMany(Qualification::class);
    }

    /**
     * Get the professional qualifications for the candidate.
     */
    public function professionalQualifications()
    {
        return $this->hasMany(ProfessionalQualification::class);
    }

    /**
     * Get the experiences for the candidate.
     */
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    /**
     * Get the dependents for the candidate.
     */
    public function dependents()
    {
        return $this->hasMany(Dependent::class);
    }

    /**
     * Get the resumes for the candidate.
     */
    public function resumes()
    {
        return $this->hasMany(Resume::class);
    }
}
