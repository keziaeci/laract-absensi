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
        Schema::create('presences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->timestamp('clock_in')->default(now());
            $table->timestamp('clock_out')->nullable()->default(now());
            $table->string('clock_in_lng');
            $table->string('clock_in_lat');
            $table->string('clock_out_lng')->nullable();
            $table->string('clock_out_lat')->nullable();
            $table->string('clock_in_location');
            $table->string('clock_out_location')->nullable();
            $table->boolean('is_late')->default(false);
            $table->string('clock_in_image');
            $table->string('clock_out_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presences');
    }
};
