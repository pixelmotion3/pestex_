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
        Schema::create('landing_pages4', function (Blueprint $table) {
            $table->id();
            $table->string('our-services-h6-1');
            $table->string('our-services-h2-1');
            $table->string('our-services-bg-img-path-1');
            $table->string('our-services-tab-1');
            $table->string('our-services-tab-1-h2');
            $table->string('our-services-tab-1-p');
            $table->string('our-services-tab-1-p-1');
            $table->string('our-services-tab-1-li-1');
            $table->string('our-services-tab-1-li-2');
            $table->string('our-services-tab-1-li-3');
            $table->string('our-services-tab-1-p-2');
            $table->string('our-services-tab-1-a-2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages4');
    }
};
