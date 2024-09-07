<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading_meta');
            $table->string('heading');
            $table->text('description');
            $table->json('services')->nullable(); // Add this line
            $table->string('hire_heading');
            $table->string('hire_button_text');
            $table->string('hire_button_link');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
