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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tool_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('rating');
            $table->string('comment');
            $table->boolean('status');
            $table->boolean('is_approved');
            $table->boolean('is_featured');
            $table->boolean('is_spam');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tool_id')->references('id')->on('tools');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
