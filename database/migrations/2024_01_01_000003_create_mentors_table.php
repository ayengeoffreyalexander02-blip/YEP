<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('expertise')->nullable();
            $table->integer('years_of_experience')->default(0);
            $table->text('specialization')->nullable();
            $table->text('mentoring_areas')->nullable();
            $table->integer('max_mentees')->default(5);
            $table->enum('status', ['active', 'inactive', 'pending_verification'])->default('pending_verification');
            $table->integer('rating')->default(0);
            $table->integer('reviews_count')->default(0);
            $table->boolean('verified')->default(false);
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();

            $table->index('user_id');
            $table->index('status');
            $table->index('verified');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};