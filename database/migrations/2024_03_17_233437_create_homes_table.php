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
            $table->string('title_1');
            $table->string('description_1');
            $table->string('image_1');

            $table->string('title_2');
            $table->string('description_2');
            $table->string('image_2');
            $table->json('items_2');

            $table->string('title_3');
            $table->string('description_3');
            $table->string('image_3');
            $table->json('items_3');

            $table->string('title_4');
            $table->string('description_4');
            $table->string('image_4');

            $table->string('title_5');
            $table->json('items_5');

            $table->string('title_6');

            $table->string('title_7');

            $table->string('title_8');
            $table->string('image_8');
            $table->json('items_8');

            $table->string('title_9');

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
