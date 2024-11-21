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
        Schema::create('landing_pages11', function (Blueprint $table) {
            $table->id();
            $table->string('watch-video-p-strong-1');
            $table->string('watch-video-h2');
            $table->string('watch-video-p-2');
            $table->string('watch-video-p-2-1');
            $table->string('watch-video-p-3');
            $table->string('watch-video-p-3-1');            
            $table->string('contact-us-h2-part-1');
            $table->string('contact-us-h2-part-2');
            $table->string('watch-video-bg-img');
            $table->string('contact-us-bg-img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages11');
    }
};
