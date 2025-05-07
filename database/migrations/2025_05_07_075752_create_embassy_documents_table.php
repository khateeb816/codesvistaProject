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
        Schema::create('embassy_documents', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_id')->default(0);
            $table->boolean('visa_form')->default(0);
            $table->boolean('waqala_paper')->default(0);
            $table->boolean('e_number_print')->default(0);
            $table->boolean('company_agreement')->default(0);
            $table->boolean('navttc_report')->default(0);
            $table->boolean('driving_license')->default(0);
            $table->boolean('driving_license_undertaking')->default(0);
            $table->boolean('driving_license_online_print')->default(0);
            $table->boolean('degree_copies')->default(0);
            $table->boolean('agency_undertaking')->default(0);
            $table->boolean('agency_license')->default(0);
            $table->boolean('police_certificate')->default(0);
            $table->boolean('fir_newspaper')->default(0);
            $table->boolean('medical_report')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('embassy_documents');
    }
};
