<?php

namespace Database\Factories\admin;

use App\Models\admin\Blog;
use App\Models\admin\Category;
use App\Models\admin\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'show_title' => $this->faker->sentence,
            'show_description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl,
            'title_1' => $this->faker->sentence,
            'description_1' => $this->faker->paragraph,
            'title_2' => $this->faker->sentence,
            'subtitle_2' => $this->faker->sentence,
            'image_2' => $this->faker->imageUrl,
            'description_2' => $this->faker->paragraph,
            'image_3' => $this->faker->imageUrl,
            'description_3' => $this->faker->paragraph,
            'title_4' => $this->faker->sentence,
            'image_4' => $this->faker->imageUrl,
            'description_4' => $this->faker->paragraph,
            'slug' => $this->faker->slug,
            'sort' => $this->faker->randomNumber(2),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
