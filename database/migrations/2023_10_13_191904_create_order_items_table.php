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
        Schema::create('order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedInteger('sub_sections_id')->unsigned()->nullable();
            $table->foreign('sub_sections_id')->references('id')->on('sub_sections')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('providers_id')->unsigned();
            $table->foreign('providers_id')->references('id')->on('providers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('count');
            $table->integer('price')->comment('for one peace');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
