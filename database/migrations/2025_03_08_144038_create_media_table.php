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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_path'); // Path to the uploaded file (image or video)
            $table->string('file_type'); // Type of file (e.g., 'image', 'video')
            $table->unsignedBigInteger('note_id'); // Define the column
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('note_id')
                ->references('id')
                ->on('tutorials')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
