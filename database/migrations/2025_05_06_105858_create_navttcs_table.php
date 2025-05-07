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
        Schema::create('navttcs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidate_id')->constrained('candidates')->onDelete('cascade');
            $table->string('center_name');
            $table->string('course');
            $table->string('status')->default('Pending');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('notes')->nullable();
            $table->string('occupation_name_arabic');
            $table->string('occupation_name_english');
            $table->string('occupation_code');
            $table->string('test_center_city');
            $table->date('test_date')->nullable();
            $table->date('expected_result_date')->nullable();
            $table->string('result_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navttcs');
    }
};
