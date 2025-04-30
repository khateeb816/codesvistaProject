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
        Schema::create('employee_setups', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->nullable();
            $table->string('password', 255)->nullable();
            $table->integer('code')->nullable();
            $table->string('ownership', 50)->nullable();
            $table->string('sales_turnover', 50)->nullable();
            $table->integer('number_of_offices')->nullable();
            $table->string('company_name', 100)->nullable();
            $table->string('sector_industry', 50)->nullable();
            $table->integer('number_of_employees')->nullable();
            $table->text('company_info')->nullable();
            $table->text('company_address')->nullable();
            $table->string('country', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('street', 100)->nullable();
            $table->string('zip', 10)->nullable();
            $table->string('fax', 50)->nullable();
            $table->string('plan', 50)->nullable();
            $table->string('website_url', 255)->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('phone_type', 50)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('contact_person_name', 100)->nullable();
            $table->string('contact_person_phone', 20)->nullable();
            $table->string('profile_picture', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_setups');
    }
};
