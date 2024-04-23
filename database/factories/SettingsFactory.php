<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'email' => $this->faker->email,
            'logo' => $this->faker->imageUrl(),
            'keywords' => $this->faker->words(5, true),
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'title_seo' => $this->faker->sentence,
            'description_seo' => $this->faker->paragraph,
            'keywords_seo' => $this->faker->words(5, true),
        ];
    }
}
