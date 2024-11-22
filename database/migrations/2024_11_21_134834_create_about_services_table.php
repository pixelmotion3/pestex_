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
        Schema::create('about_services', function (Blueprint $table) {
            $table->id();
            $table->string('image-layer-path');
            $table->string('h6');
            $table->string('h2');
            $table->string('p');

            $table->string('img-path');
            $table->string('h6-span');
            $table->string('h3');
            $table->string('p-1');

            $table->string('h3-1');
            $table->string('h3-2');
            $table->string('h3-3');

            $table->string('li-i-1');
            $table->string('li-i-2');
            $table->string('li-i-3');
            $table->string('li-i-4');

            $table->string('a-span');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_services');
    }
};
