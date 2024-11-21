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
        Schema::create('landing_pages9', function (Blueprint $table) {
            $table->id();
            $table->string('collapse-bg-img');
            $table->string('collapse-h3-1');
            $table->string('collapse-p-1');
            $table->string('collapse-h3-2');
            $table->string('collapse-p-2');
            $table->string('collapse-h3-3');
            $table->string('collapse-p-3');
            $table->string('collapse-h4-1');
            $table->string('collapse-div-p-1');
            $table->string('collapse-div-p-1-1');
            $table->string('collapse-div-p-1-2');
            $table->string('collapse-h4-2');
            $table->string('collapse-div-p-2');
            $table->string('collapse-div-p-2-1');
            $table->string('collapse-div-p-2-2');
            $table->string('collapse-h4-3');
            $table->string('collapse-div-p-3');
            $table->string('collapse-div-p-3-1');
            $table->string('collapse-div-p-3-2');
            $table->string('collapse-h4-4');
            $table->string('collapse-div-p-4');
            $table->string('collapse-div-p-4-1');
            $table->string('collapse-div-p-4-2');
            $table->string('collapse-h4-5');
            $table->string('collapse-div-p-5');
            $table->string('collapse-div-p-5-1');
            $table->string('collapse-div-p-5-2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages9');
    }
};
