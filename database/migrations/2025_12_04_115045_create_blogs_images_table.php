<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_blogs')->constrained('blogs')->onDelete('cascade');
            $table->text('path');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs_images');
    }
};
