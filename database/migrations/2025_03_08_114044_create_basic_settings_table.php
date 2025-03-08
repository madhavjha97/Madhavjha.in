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
        Schema::create('basic_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->text('social_link')->nullable();
            $table->text('about_me')->nullable();
            $table->string('logo')->nullable();
            $table->integer('total_exp')->nullable();
            $table->string('current_company')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_settings');
    }
};
