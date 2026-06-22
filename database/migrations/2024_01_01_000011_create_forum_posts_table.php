<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('forum_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('parent_id')->nullable()->constrained('forum_posts')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->text('content');
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->integer('views_count')->default(0);
            $table->integer('likes_count')->default(0);
            $table->integer('replies_count')->default(0);
            $table->boolean('is_pinned')->default(false);
            $table->boolean('is_solution')->default(false);
            $table->timestamps();

            $table->index('user_id');
            $table->index('parent_id');
            $table->index('category');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forum_posts');
    }
};