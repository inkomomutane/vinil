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
        Schema::create('user_performances', static function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('user_id');
            $table->unsignedInteger('interviews_count')->default(0);
            $table->date('recorded_date');
            $table->unsignedInteger('reworks_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_performances');
    }
};
