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
        Schema::create('landing_pages3', function (Blueprint $table) {
            $table->id();
            $table->string('best-service-h6-1');
            $table->string('best-service-h3-1');
            $table->string('best-service-img-path-1');
            $table->string('best-service-a-1');
            $table->string('best-service-p-1');
            $table->string('best-service-img-path-2');
            $table->string('best-service-a-2');
            $table->string('best-service-p-2');
            $table->string('best-service-img-path-3');
            $table->string('best-service-a-3');
            $table->string('best-service-p-3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages3');
    }
};
