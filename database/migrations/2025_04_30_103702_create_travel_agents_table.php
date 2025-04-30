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
    Schema::create('traval_agents', function (Blueprint $table) {
        $table->id();
        $table->string('code', 10);
        $table->string('name', 100);
        $table->string('location', 100);
        $table->string('arlines_deals_with', 100)->nullable();
        $table->string('secondary_email', 100)->nullable();
        $table->string('secondary_phone', 15)->nullable();
        $table->string('primary_email', 100)->nullable();
        $table->string('primary_phone', 15)->nullable();
        $table->string('address', 100)->nullable();
        $table->string('file_path', 255)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_agents');
    }
};
