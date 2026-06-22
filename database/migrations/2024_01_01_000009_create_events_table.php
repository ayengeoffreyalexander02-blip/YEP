<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->enum('type', ['workshop', 'webinar', 'seminar', 'conference', 'networking'])->default('workshop');
            $table->string('location')->nullable();
            $table->string('virtual_link')->nullable();
            $table->boolean('is_virtual')->default(false);
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->string('organizer');
            $table->integer('capacity')->default(100);
            $table->integer('registered_count')->default(0);
            $table->string('image')->nullable();
            $table->enum('status', ['upcoming', 'ongoing', 'completed', 'cancelled'])->default('upcoming');
            $table->timestamps();

            $table->index('type');
            $table->index('status');
            $table->index('start_date');
            $table->index('slug');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};