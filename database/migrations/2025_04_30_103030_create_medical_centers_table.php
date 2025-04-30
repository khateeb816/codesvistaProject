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
        Schema::create('medical_centers', function (Blueprint $table) {
            $table->id();
            $table->string('city'); // City is required
            $table->string('name'); // Name is required
            $table->string('phone', 20)->nullable(); // Optional phone number
            $table->string('contact_person')->nullable(); // Optional contact person name
            $table->string('fax'); // Fax is required
            $table->string('email'); // Email is required
            $table->string('location')->nullable(); // Optional location information
            $table->text('address'); // Address is required
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_centers');
    }
};
