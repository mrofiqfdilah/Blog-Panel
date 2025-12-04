<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_category')->constrained('categories')->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->text('thumbnail');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
