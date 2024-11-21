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
        Schema::create('landing_pages10', function (Blueprint $table) {
            $table->id();
            $table->string('call-now-bg-image-1-path');
            $table->string('call-now-bg-image-2-path');
            $table->string('call-now-bg-image-3-path');
            $table->string('call-now-h4-1');
            $table->string('call-now-p-a-1');
            $table->string('call-now-p-a-2');
            $table->string('call-now-h4-2');
            $table->string('call-now-p-a-3');
            $table->string('call-now-p');
            $table->string('call-now-p-1');
            $table->string('call-now-a-2');
            $table->string('call-now-bg-image-4-path');
            $table->string('call-now-a-3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages10');
    }
};
