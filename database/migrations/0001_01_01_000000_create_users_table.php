<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('username', 100);
        $table->string('user_type', 50)->default('User');
        $table->string('permission', 100);
        $table->string('password');
        $table->string('full_name', 255)->nullable();
        $table->string('father_name', 255)->nullable();
        $table->string('contact_no', 20)->nullable();
        $table->string('email', 100);
        $table->string('cnic', 20)->nullable();
        $table->boolean('is_admin')->default(0);
        $table->boolean('is_active')->default(1);
        $table->string('profile_image', 255)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
