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
        Schema::create('buddy_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buddy_id')->constrained()->onDelete('cascade');
            $table->foreignId('attribute_id')->references('id')->on('buddy_attributes')->onDelete('cascade');
            $table->text('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buddy_values');
    }
};
