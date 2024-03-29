<?php

namespace Database\Factories\admin;

use App\Models\admin\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug,
            'color' => $this->faker->randomElement(['dark', 'red', 'green', 'yellow', 'indigo', 'purple', 'pink', 'default']),
        ];
    }
}
