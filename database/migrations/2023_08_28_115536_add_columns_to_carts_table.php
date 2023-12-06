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
        Schema::table('carts', function (Blueprint $table) {
            $table->string('home_id')->default(0);
            $table->string('royal_id')->default(0);
            $table->string('hospital_id')->default(0);
            $table->string('hotel_id')->default(0);
            $table->string('pillow_id')->default(0);
            $table->string('protector_id')->default(0);
            $table->string('topper_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            //
        });
    }
};
