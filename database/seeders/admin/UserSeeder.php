<?php

namespace Database\Seeders\admin;

use App\Models\admin\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'victordasilvafernandes@gmail.com',
            'password' => Hash::make('59223776'),
            'active' => 1,
        ]);

        $super_admin = Role::create(['name' => 'Super Admin']);
        $admin->assignRole($super_admin);
        $admin->assignRole([
            'blogs',
            'tags',
            'categories',
            'users',
            'dashboard',
            'smtp',
            'settings',
        ]);

        $moderator = User::factory()->create([
            'name' => 'Victor Sad',
            'email' => 'victorsad@email.com',
            'password' => Hash::make('VictorSad123*'),
            'active' => 1,
        ]);

        $role = Role::create(['name' => 'Moderator']);
        $moderator->assignRole($role);
        $moderator->assignRole([
            'blogs',
            'tags',
            'categories',
            'dashboard',
            'smtp',
            'settings',
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@email.com',
            'password' => Hash::make('123456*'),
            'active' => 1,
        ]);
    }
}
