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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('cover')->nullable();
            $table->text('bio')->nullable();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('education')->nullable();
            $table->string('awards')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->string('academic_interests')->nullable();
            $table->string('professional_interests')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('skills')->nullable();
            $table->json('languages')->nullable();
            $table->json('learning_preferences')->nullable();
            $table->string('preferred_pronouns')->nullable();
            $table->json('preferred_study_tools')->nullable();
            $table->boolean('agree_terms')->default(false);
            $table->enum('show_email', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_birthday', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_pronouns', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_languages', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_education', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_awards', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_skills', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_hobbies', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_academic_interests', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_professional_interests', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_learning_preferences', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_study_tools', ['public', 'friends', 'only_me'])->default('only_me');
            $table->enum('show_social_links', ['public', 'friends', 'only_me'])->default('public');
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('iso_code')->nullable();
            $table->string('country')->nullable();
            $table->string('timezone')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
