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
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->id();
            $table->string('role_name'); // Role name is required
            $table->string('permission_name'); // Permission name is required
            $table->boolean('can_view')->default(0); // Default is 0 (false)
            $table->boolean('can_add')->default(0); // Default is 0 (false)
            $table->boolean('can_edit')->default(0); // Default is 0 (false)
            $table->boolean('can_delete')->default(0); // Default is 0 (false)
            $table->boolean('can_authorize')->default(0); // Default is 0 (false)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permissions');
    }
};
