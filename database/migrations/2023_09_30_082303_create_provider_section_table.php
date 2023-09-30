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
        Schema::create('provider_section', function (Blueprint $table) {
            $table->unsignedInteger('sections_id')->unsigned()->nullable();
            $table->foreign('sections_id')->references('id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('providers_id')->unsigned();
            $table->foreign('providers_id')->references('id')->on('providers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provider_section');
    }
};
