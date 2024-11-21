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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('bg-1');
            $table->string('shape-one-1');
            $table->string('shape-two-1');
            $table->string('shape-three-1');
            $table->string('shape-four-1');
            $table->string('thumb-1');
            $table->string('h2-span-1');
            $table->string('h2-span-2');
            $table->string('h2-span-3');
            $table->string('p-1');

            $table->string('bg-2');
            $table->string('shape-one-2');
            $table->string('shape-two-2');
            $table->string('shape-three-2');
            $table->string('shape-four-2');
            $table->string('thumb-2');
            $table->string('h2-span-1-1');
            $table->string('h2-span-2-1');
            $table->string('h2-span-3-1');
            $table->string('p-1-1');

            $table->string('div-a-b-1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
