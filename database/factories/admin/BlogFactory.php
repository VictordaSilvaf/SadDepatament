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
        $title = $this->faker->sentence;
        $subtitle = $this->faker->sentence;
        $description = $this->faker->paragraph;
        $slug = $this->faker->slug;

        // Crie o blog
        $blog = Blog::create([
            'title' => $title,
            'subtitle' => $subtitle,
            'description' => $description,
            'slug' => $slug,
        ]);

        // Adicione categorias aleatórias ao blog
        $categories = Category::inRandomOrder()->take(rand(1, 3))->get(); // Adiciona de 1 a 3 categorias aleatórias
        $blog->categories()->attach($categories);

        // Adicione tags aleatórias ao blog
        $tags = Tag::inRandomOrder()->take(rand(1, 5))->get(); // Adiciona de 1 a 5 tags aleatórias
        $blog->tags()->attach($tags);

        return [
            'title' => $title,
            'subtitle' => $subtitle,
            'description' => $description,
            'slug' => $slug,
        ];
    }
}
