<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('experience_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading_meta');
            $table->string('heading');
            $table->json('experiences')->nullable(); // Add this line
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experience_sections');
    }
};
