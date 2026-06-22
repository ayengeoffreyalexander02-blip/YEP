<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('opportunity_id')->constrained('opportunities')->onDelete('cascade');
            $table->enum('status', ['pending', 'shortlisted', 'interviewed', 'rejected', 'accepted'])->default('pending');
            $table->text('cover_letter')->nullable();
            $table->string('resume_path')->nullable();
            $table->text('additional_info')->nullable();
            $table->timestamp('applied_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'opportunity_id']);
            $table->index('user_id');
            $table->index('opportunity_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};