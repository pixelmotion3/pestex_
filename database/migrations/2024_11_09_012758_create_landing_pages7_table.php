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
        Schema::create('landing_pages7', function (Blueprint $table) {
            $table->id();
            $table->string('choose-us-p-1');
            $table->string('choose-us-h3');
            $table->string('choose-us-p-2');
            $table->string('choose-us-p-2-1');
            $table->string('choose-us-h4-1');
            $table->string('choose-us-h4-2');
            $table->string('choose-us-h4-3');
            $table->string('choose-us-img');
            $table->string('choose-us-img-1');
            $table->string('choose-us-img-2');
            $table->string('choose-us-img-3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages7');
    }
};
