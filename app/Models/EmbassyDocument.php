<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Model;

class EmbassyDocument extends Model
{
    protected $table = 'embassy_documents';
    protected $fillable = [
        'candidate_id',
        'visa_form',
        'waqala_paper',
        'e_number_print',
        'company_agreement',
        'navttc_report',
        'driving_license',
        'driving_license_undertaking',
        'driving_license_online_print',
        'degree_copies',
        'agency_undertaking',
        'agency_license',
        'police_certificate',
        'fir_newspaper',
        'medical_report',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
