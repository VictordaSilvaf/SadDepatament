<?php

namespace Database\Seeders;

use App\Models\admin\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $number = 10;
        Home::factory()->count($number)->create();
    }
}
