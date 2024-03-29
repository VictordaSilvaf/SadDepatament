<?php

namespace Database\Seeders\admin;

use App\Models\admin\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $number = 10;
        Category::factory()->count($number)->create();
    }
}
