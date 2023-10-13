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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('provider_id');
            $table->string('code');
            $table->integer('order_cost')->nullable();
            $table->integer('delivery_cost')->nullable();
            $table->integer('total_cost')->nullable();
            $table->enum('status',['0','1','2','3','4'])
                ->comment('0=>new,1=>confirmed,2=>canceled,3=>underway,4=>done');
            $table->enum('payment_method',['0','1'])
                ->comment('0 => online, 1=>cash on delivery');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
