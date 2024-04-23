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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('author')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->string('keywords')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();

            $table->text('footer_description')->nullable();
            $table->json('footer_useful_links')->nullable();
            $table->json('footer_social_links')->nullable();

            $table->string('title_seo')->nullable();
            $table->text('description_seo')->nullable();
            $table->string('keywords_seo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
