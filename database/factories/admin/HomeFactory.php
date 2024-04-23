<?php

namespace Database\Factories\admin;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title_1' => $this->faker->sentence,
            'description_1' => $this->faker->paragraph,
//            'image_1' => $this->faker->image,

            'title_2' => $this->faker->sentence,
            'description_2' => $this->faker->paragraph,
//            'image_2' => $this->faker->image,
            'items_2' => [
                $this->faker->sentence,
                $this->faker->sentence,
                $this->faker->sentence,
                $this->faker->sentence,
                $this->faker->sentence,
                $this->faker->sentence
            ],
            'title_3' => $this->faker->sentence,
            'description_3' => $this->faker->paragraph,
//            'image_3' => $this->faker->image,
            'items_3' => [
                [$this->faker->word, $this->faker->numberBetween(10, 1000)],
                [$this->faker->word, $this->faker->numberBetween(10, 1000)],
                [$this->faker->word, $this->faker->numberBetween(10, 1000)],
                [$this->faker->word, $this->faker->numberBetween(10, 1000)]
            ],
            'title_4' => $this->faker->sentence,
//            'images_4' => [$this->faker->image, $this->faker->image, $this->faker->image, $this->faker->image],

            'title_5' => $this->faker->sentence,

            'title_6' => $this->faker->sentence,

            'title_7' => $this->faker->sentence,
//            'image_7' => $this->faker->image,
            'items_7' => [
                [$this->faker->sentence, $this->faker->paragraph],
                [$this->faker->sentence, $this->faker->paragraph],
                [$this->faker->sentence, $this->faker->paragraph],
                [$this->faker->sentence, $this->faker->paragraph],
                [$this->faker->sentence, $this->faker->paragraph],
                [$this->faker->sentence, $this->faker->paragraph],
            ],

            'title_8' => $this->faker->sentence,
        ];
    }
}
