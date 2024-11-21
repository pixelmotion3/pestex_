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
        Schema::create('landing_pages', function (Blueprint $table) {

            $table->id();

            $table->string('nav-paragraph');
            
            $table->string('quote-form-tab-title-1');
            $table->string('quote-form-tab-title-2');
            $table->string('quote-form-tab-2-h2');
            $table->string('quote-form-tab-2-p');

            $table->string('carrousel-h5');
            $table->string('carrousel-h2');
            $table->string('carrousel-p');
            $table->string('carrousel-a-1');
            $table->string('carrousel-bg-img-path');

            $table->string('carrousel-h5-1');
            $table->string('carrousel-h2-1');
            $table->string('carrousel-p-1');
            $table->string('carrousel-a-1-1');
            $table->string('carrousel-bg-img-path-1');

            $table->string('carrousel-h5-2');
            $table->string('carrousel-h2-2');
            $table->string('carrousel-p-2');
            $table->string('carrousel-a-1-2');
            $table->string('carrousel-bg-img-path-2');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages');
    }
};
