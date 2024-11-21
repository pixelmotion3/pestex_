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
        Schema::create('landing_pages2', function (Blueprint $table) {
            $table->id();
            $table->string('company-status-h6');
            $table->string('company-status-h3');
            $table->string('company-status-1h4');
            $table->string('company-status-1p');
            $table->string('company-status-2h4');
            $table->string('company-status-2p');
            $table->string('company-status-3h4');
            $table->string('company-status-3p');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages2');
    }
};
