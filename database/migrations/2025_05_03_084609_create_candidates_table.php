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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('candidate_type')->nullable();
            $table->string('religion')->nullable();
            $table->string('title')->nullable();
            $table->string('salary')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('education')->nullable();
            $table->string('cnic')->nullable();
            $table->string('experience')->nullable();
            $table->string('profession')->nullable();
            $table->string('father_name')->nullable();
            $table->string('job_type')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('job_applied_for')->nullable();
            $table->string('age')->nullable();
            $table->string('plan')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('nationality')->nullable();


            //passport
            $table->string('passport_number')->nullable();
            $table->string('passport_issue_date')->nullable();
            $table->string('passport_expiry_date')->nullable();
            $table->string('passport_issue_place')->nullable();

            //Residence
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('street')->nullable();

            //Contact
            $table->string('mobile')->nullable();
            $table->string('alternate_mobile')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('return_address')->nullable();

            //Skills
            $table->longText('qualification')->nullable();
            $table->longText('professional_qualification')->nullable();
            $table->longText('professional_experience')->nullable();

            //Present Status
            $table->string('any_police_case')->nullable();
            $table->string('any_political_involvement')->nullable();
            $table->string('present_employment')->nullable();
            $table->string('achievements')->nullable();

            //Candidate Dependents
            $table->longText('dependents')->nullable();

            //Resumes
            $table->string('resume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
