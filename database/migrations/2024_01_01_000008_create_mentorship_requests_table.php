<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mentorship_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mentee_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('mentor_id')->constrained('mentors')->onDelete('cascade');
            $table->text('reason')->nullable();
            $table->enum('status', ['pending', 'accepted', 'rejected', 'completed'])->default('pending');
            $table->timestamp('accepted_at')->nullable();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->timestamps();

            $table->index('mentee_id');
            $table->index('mentor_id');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mentorship_requests');
    }
};