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
            $table->id();
            $table->string('order_id');
            $table->string('home_id');
            $table->string('royal_id');
            $table->string('hospital_id');
            $table->string('hotel_id');
            $table->string('pillow_id');
            $table->string('protector_id');
            $table->string('topper_id');
            $table->string('product_name');
            $table->string('master_size_id');
            $table->string('unit_id');
            $table->string('size_id');
            $table->string('thickness_id');
            $table->string('price');
            $table->string('quantity');
            $table->string('image');
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
