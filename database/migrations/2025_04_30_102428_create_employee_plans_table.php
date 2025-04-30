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
        Schema::create('employee_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name');
            $table->decimal('plan_amount', 10, 2); // Use decimal for currency or amounts
            $table->integer('valid_for_days');
            $table->integer('max_jobs_allowed')->default(-1);
            $table->integer('supports_featured_job')->default(1);
            $table->integer('allowed_featured_jobs')->default(-1);
            $table->decimal('featured_job_amount', 10, 2)->nullable(); // Use decimal for featured job amount
            $table->decimal('featured_employer_amount', 10, 2)->nullable(); // Use decimal for employer amount
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_plans');
    }
};

