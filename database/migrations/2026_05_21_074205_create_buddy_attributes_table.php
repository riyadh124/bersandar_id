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
        Schema::create('buddy_attributes', function (Blueprint $table) {
            $table->id();
            $table->string('label'); // Contoh: "Hobi", "Bahasa"
            $table->string('type')->default('text'); // text, number, select
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buddy_attributes');
    }
};
