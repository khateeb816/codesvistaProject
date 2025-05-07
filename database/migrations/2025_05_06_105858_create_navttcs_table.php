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
            $table->integer('candidate_id');
            $table->string('center_name');
            $table->string('course');
            $table->string('status')->default('Pending');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('notes')->nullable();
            $table->string('occupation_name_arabic')->nullable();
            $table->string('occupation_name_english')->nullable();
            $table->string('occupation_code')->nullable();
            $table->string('test_center_city')->nullable();
            $table->date('test_date')->nullable();
            $table->date('expected_result_date')->nullable();
            $table->string('result_status')->nullable();
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
