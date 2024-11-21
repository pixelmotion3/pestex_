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
        Schema::create('landing_pages6', function (Blueprint $table) {
            $table->id();
            $table->string('about-now-h6');
            $table->string('about-now-h3');
            $table->string('about-now-p');
            $table->string('about-now-1-bg-img-path');
            $table->string('about-now-2-img-path');
            $table->string('about-now-li-1');
            $table->string('about-now-li-2');
            $table->string('about-now-li-3');
            $table->string('about-now-li-4');
            $table->string('about-now-li-5');
            $table->string('about-now-li-6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages6');
    }
};
