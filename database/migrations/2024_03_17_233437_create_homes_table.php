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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('title_1')->nullable();
            $table->text('description_1')->nullable();
            $table->string('image_1')->nullable();

            $table->string('title_2')->nullable();
            $table->text('description_2')->nullable();
            $table->string('image_2')->nullable();
            $table->json('items_2')->nullable();

            $table->string('title_3')->nullable();
            $table->text('description_3')->nullable();
            $table->string('image_3')->nullable();
            $table->json('items_3')->nullable();

            $table->string('title_4')->nullable();
            $table->json('images_4')->nullable();

            $table->string('title_5')->nullable();

            $table->string('title_6')->nullable();

            $table->string('title_7')->nullable();
            $table->string('image_7')->nullable();
            $table->json('items_7')->nullable();

            $table->string('title_8')->nullable();

            $table->string('image_9')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
