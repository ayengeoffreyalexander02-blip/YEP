<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->enum('type', ['ebook', 'guide', 'career_resource', 'entrepreneurship', 'template', 'video'])->default('guide');
            $table->string('file_path')->nullable();
            $table->string('category');
            $table->string('author');
            $table->integer('download_count')->default(0);
            $table->string('file_size')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['published', 'draft', 'archived'])->default('draft');
            $table->timestamps();

            $table->index('type');
            $table->index('category');
            $table->index('status');
            $table->index('slug');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};