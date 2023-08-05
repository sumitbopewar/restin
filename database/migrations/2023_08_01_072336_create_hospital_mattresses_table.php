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
        Schema::create('hospital_mattresses', function (Blueprint $table) {
            $table->id();
            $table->string('collection');
            $table->string('master_size_id');
            $table->string('size_mm');
            $table->string('size_inch');
            $table->string('thickness_id');
            $table->string('product');
            $table->string('price');
            $table->string('image');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospital_mattresses');
    }
};
