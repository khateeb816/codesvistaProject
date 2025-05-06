<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'candidate_type',
        'religion',
        'title',
        'salary',
        'gender',
        'marital_status',
        'first_name',
        'last_name',
        'education',
        'cnic',
        'experience',
        'profession',
        'father_name',
        'job_type',
        'date_of_birth',
        'job_applied_for',
        'age',
        'plan',
        'place_of_birth',
        'nationality',
        'mobile',
        'email',
        'address',
        'passport_number',
        'passport_issue_date',
        'passport_expiry_date',
        'passport_issue_place',
        'country',
        'state',
        'province',
        'district',
        'city',
        'zip',
        'street',
        'alternate_mobile',
        'fax',
        'website',
        'qualification',
        'professional_qualification',
        'professional_experience',
        'dependents',
        'return_address',
        'qualification',
        'professional_qualification',
        'professional_experience',
        'any_police_case',
        'any_political_involvement',
        'present_employment',
        'achievements',
        'dependents',
        'resume',
        'e_number',
        'status',
    ];

    protected $casts = [
        'any_police_case' => 'string',
        'any_political_involvement' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'qualification' => 'json',
        'professional_qualification' => 'json',
        'professional_experience' => 'json',
        'dependents' => 'json',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function jobs()
    {
        return $this->hasMany(JobCandidate::class);
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    public function navttc()
    {
        return $this->hasMany(Navttc::class);
    }
}
