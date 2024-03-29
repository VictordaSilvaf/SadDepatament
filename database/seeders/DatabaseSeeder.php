<?php

namespace Database\Seeders;

use App\Models\admin\Settings;
use App\Models\admin\User;
use Database\Seeders\admin\BlogSeeder;
use Database\Seeders\admin\CategorySeeder;
use Database\Seeders\admin\TagSeeder;
use Database\Seeders\admin\UserSeeder;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Settings::create([]);

        $this->call([
            PermissionsSeeders::class,
            UserSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            BlogSeeder::class,
        ]);
    }
}
