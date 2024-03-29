<?php

namespace Database\Seeders\admin;

use App\Models\admin\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfTags = 10;
        Tag::factory()->count($numberOfTags)->create();
    }
}
