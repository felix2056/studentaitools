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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->text('content');
            $table->text('use_cases')->nullable();
            $table->string('link');
            $table->json('tags')->nullable();
            $table->string('favicon')->nullable();
            $table->string('screenshot1')->nullable();
            $table->string('screenshot2')->nullable();
            $table->string('screenshot3')->nullable();
            $table->integer('views')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->enum('pricing', ['free', 'freemium', 'paid'])->default('free');
            $table->json('pros')->nullable();
            $table->json('cons')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
