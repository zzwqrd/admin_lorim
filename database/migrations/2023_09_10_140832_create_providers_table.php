<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('title_ar');
            $table->string('title_en');
            $table->string('description_ar');
            $table->string('description_en');
            $table->double('rate')->default('0')->unsigned();
            $table->enum('status', ['0', '1'])->default('1');
            $table->unsignedInteger('section_id');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->unsignedInteger('sub_section_id');
            $table->foreign('sub_section_id')->references('id')->on('sub_sections')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
