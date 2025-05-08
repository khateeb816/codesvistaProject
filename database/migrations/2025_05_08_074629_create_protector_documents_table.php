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
        Schema::create('protector_documents', function (Blueprint $table) {
            $table->id();
            $table->integer('candidate_id');
            $table->boolean('bc_form')->default(false);
            $table->boolean('national_bank_slip')->default(false);
            $table->boolean('insurance_paper')->default(false);
            $table->boolean('passport_id_card')->default(false);
            $table->boolean('ptn_form')->default(false);
            $table->boolean('bank_details')->default(false);
            $table->boolean('diary_form')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protector_documents');
    }
};
