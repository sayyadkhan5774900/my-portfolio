<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contact_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading_meta');
            $table->string('heading');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_sections');
    }
};
