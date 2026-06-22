<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->enum('type', ['job', 'internship', 'scholarship', 'volunteer'])->default('job');
            $table->string('organization');
            $table->string('location')->nullable();
            $table->text('requirements')->nullable();
            $table->text('benefits')->nullable();
            $table->string('category')->nullable();
            $table->integer('positions_available')->default(1);
            $table->integer('applications_count')->default(0);
            $table->timestamp('deadline');
            $table->decimal('salary', 12, 2)->nullable();
            $table->string('employment_type')->nullable();
            $table->enum('status', ['open', 'closed', 'filled'])->default('open');
            $table->timestamps();

            $table->index('type');
            $table->index('status');
            $table->index('deadline');
            $table->index('slug');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('opportunities');
    }
};