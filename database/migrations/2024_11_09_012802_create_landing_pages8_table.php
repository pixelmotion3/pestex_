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
        Schema::create('landing_pages8', function (Blueprint $table) {
            $table->id();
            $table->string('testimonial-say-p-strong');
            $table->string('testimonial-say-h2');
            $table->string('testimonial-say-p-i-1');
            $table->string('testimonial-say-p-i-1-1');
            $table->string('testimonial-say-h3-1');
            $table->string('testimonial-say-h5-1');
            $table->string('testimonial-say-p-i-2');
            $table->string('testimonial-say-p-i-2-1');
            $table->string('testimonial-say-h3-2');
            $table->string('testimonial-say-h5-2');
            $table->string('testimonial-say-p-i-3');
            $table->string('testimonial-say-p-i-3-1');
            $table->string('testimonial-say-h3-3');
            $table->string('testimonial-say-h5-3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages8');
    }
};
