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
        Schema::create('quote_forms', function (Blueprint $table) {
            $table->id();
            $table->string('locality');
            $table->string('client_type');
            $table->string('name');
            $table->string('products');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->boolean('confirmed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_forms');
    }
};
