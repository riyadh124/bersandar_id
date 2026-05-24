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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buddy_id')->constrained()->onDelete('cascade');
            // User_id di sini adalah user (customer) yang memberikan review
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->unsignedTinyInteger('star'); 
            $table->text('comment');
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
