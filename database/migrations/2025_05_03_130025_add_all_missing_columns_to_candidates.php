<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('candidates', function (Blueprint $table) {
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('candidate_type')->nullable();
            $table->string('religion')->nullable();
            $table->string('title')->nullable();
            $table->string('wages_salary')->nullable();
            $table->string('material_status')->nullable();
            $table->string('education')->nullable();
            $table->string('cnic')->nullable();
            $table->string('father_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('job_type')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('job_applied_for')->nullable();
            $table->string('age')->nullable();
            $table->string('plan')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('passport_number')->nullable();
            $table->date('passport_issue_date')->nullable();
            $table->date('passport_expiry_date')->nullable();
            $table->string('passport_issue_place')->nullable();
            $table->string('residence_country')->nullable();
            $table->string('residence_state')->nullable();
            $table->string('residence_province')->nullable();
            $table->string('residence_district')->nullable();
            $table->string('residence_city')->nullable();
            $table->string('residence_zip')->nullable();
            $table->string('residence_street')->nullable();
            $table->string('residence_address')->nullable();
            $table->string('alternate_phone')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('website')->nullable();
            $table->string('return_address')->nullable();
            $table->string('police_case')->nullable();
            $table->string('political_affiliation')->nullable();
            $table->string('present_employment')->nullable();
            $table->text('achievements')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('candidates', function (Blueprint $table) {
            $table->dropColumn([
                'username',
                'password',
                'candidate_type',
                'religion',
                'title',
                'wages_salary',
                'material_status',
                'education',
                'cnic',
                'father_name',
                'gender',
                'job_type',
                'date_of_birth',
                'job_applied_for',
                'age',
                'plan',
                'place_of_birth',
                'nationality',
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
                'achievements'
            ]);
        });
    }
};
