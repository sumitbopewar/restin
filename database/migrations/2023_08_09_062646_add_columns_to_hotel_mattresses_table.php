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
        Schema::table('hotel_mattresses', function (Blueprint $table) {
            $table->string('collection_img');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('about');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotel_mattresses', function (Blueprint $table) {
            //
        });
    }
};
