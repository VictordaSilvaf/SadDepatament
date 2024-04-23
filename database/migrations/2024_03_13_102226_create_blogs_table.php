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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('show_title')->nullable();
            $table->text('show_description')->nullable();

            $table->string('image')->nullable();
            $table->string('title_1')->nullable();
            $table->text('description_1')->nullable();

            $table->string('title_2')->nullable();
            $table->string('subtitle_2')->nullable();
            $table->string('image_2')->nullable();
            $table->text('description_2')->nullable();

            $table->string('image_3')->nullable();
            $table->text('description_3')->nullable();

            $table->string('title_4')->nullable();
            $table->string('image_4')->nullable();
            $table->text('description_4')->nullable();

            $table->string('slug')->nullable();
            $table->integer('sort')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
