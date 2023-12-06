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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('phone');
            $table->string('items');
            $table->string('product_name');
            $table->string('size');
            $table->string('price');
            $table->string('quantity');
            $table->string('image');
            $table->string('total_amount');
            $table->string('payment_mode');
            $table->string('payment_status');
            $table->string('placed_order_date');
            $table->string('delivery_address');
            $table->string('pin_code');
            $table->string('delivery_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
