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
        Schema::create('landing_pages5', function (Blueprint $table) {
            $table->id();
            $table->string('our-services-h6-2');
            $table->string('our-services-h2-2');
            $table->string('our-services-bg-img-path-2');
            $table->string('our-services-tab-2');
            $table->string('our-services-tab-2-h2');
            $table->string('our-services-tab-2-p');
            $table->string('our-services-tab-2-p-1');
            $table->string('our-services-tab-2-li-1');
            $table->string('our-services-tab-2-li-2');
            $table->string('our-services-tab-2-li-3');
            $table->string('our-services-tab-2-a');
            $table->string('our-services-tab-2-a-2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages5');
    }
};
