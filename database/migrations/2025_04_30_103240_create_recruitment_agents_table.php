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
        Schema::create('recruitment_agents', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10); // Code is required
            $table->string('name', 100); // Name is required
            $table->string('location', 100); // Location is required
            $table->string('cnic', 20); // CNIC is required
            $table->string('secondary_email', 100)->nullable(); // Optional secondary email
            $table->string('secondary_phone', 15)->nullable(); // Optional secondary phone
            $table->string('primary_email', 100)->nullable(); // Optional primary email
            $table->string('primary_phone', 15)->nullable(); // Optional primary phone
            $table->string('file_path', 255)->nullable(); // Optional file path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitment_agents');
    }
};
