<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->integer('age')->nullable();
        $table->string('role')->default('user');
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
    });

        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();          // e.g., "Full Stack Developer"
            $table->text('bio')->nullable();              // Long about me text
            $table->string('location')->nullable();       // City, Country
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('cv_file')->nullable();        // Resume path (PDF)
            $table->string('profile_image')->nullable();  // Profile image
            $table->boolean('is_open_to_work')->default(true);
            $table->timestamps();
        });

         // Skills table
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['technical', 'soft']);
            $table->string('category')->nullable(); // Front-End, Back-End, etc.
            $table->timestamps();
        });

        // Projects table
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('tech_stack')->nullable(); // Optional text summary
            $table->timestamps();
        });

        // Education table
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('institution');
            $table->string('year_range')->nullable(); // e.g., "2022–2025"
            $table->string('percentage')->nullable(); // or CGPA
            $table->text('details')->nullable();
            $table->timestamps();
        });

        // Messages table (from contact form)
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->timestamps();
        });

        // Pivot table: project <-> skill
        Schema::create('project_skill', function (Blueprint $table) {
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->foreignId('skill_id')->constrained()->onDelete('cascade');
            $table->primary(['project_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('abouts');
        Schema::dropIfExists('project_skill');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('education');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('skills');
    }
};
