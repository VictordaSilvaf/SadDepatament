<?php

namespace Database\Seeders\admin;

use App\Models\admin\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::factory(11)->create();
    }
}
