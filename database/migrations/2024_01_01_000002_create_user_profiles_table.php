<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('bio')->nullable();
            $table->string('skills')->nullable(); // JSON or comma-separated
            $table->string('interests')->nullable();
            $table->string('education_level')->nullable();
            $table->string('institution')->nullable();
            $table->string('field_of_study')->nullable();
            $table->text('experience')->nullable();
            $table->string('location')->nullable();
            $table->string('social_linkedin')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_github')->nullable();
            $table->boolean('notifications_enabled')->default(true);
            $table->timestamps();

            $table->index('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};