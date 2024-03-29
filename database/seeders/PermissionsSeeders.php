<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'dashboard']);
        $permission = Permission::create(['name' => 'access dashboard']);
        $role->givePermissionTo($permission);

        $role = Role::create(['name' => 'blogs']);
        $permission = Permission::create(['name' => 'index blogs']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'create blogs']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'edit blogs']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'delete blogs']);
        $role->givePermissionTo($permission);

        $role = Role::create(['name' => 'tags']);
        $permission = Permission::create(['name' => 'index tags']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'create tags']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'edit tags']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'delete tags']);
        $role->givePermissionTo($permission);

        $role = Role::create(['name' => 'categories']);
        $permission = Permission::create(['name' => 'index categories']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'create categories']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'edit categories']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'delete categories']);
        $role->givePermissionTo($permission);

        $role = Role::create(['name' => 'users']);
        $permission = Permission::create(['name' => 'index users']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'create users']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'edit users']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'delete users']);
        $role->givePermissionTo($permission);

        $role = Role::create(['name' => 'settings']);
        $permission = Permission::create(['name' => 'index settings']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'create settings']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'edit settings']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'delete settings']);
        $role->givePermissionTo($permission);

        $role = Role::create(['name' => 'smtp']);
        $permission = Permission::create(['name' => 'index smtp']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'create smtp']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'edit smtp']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'delete smtp']);
        $role->givePermissionTo($permission);

        $role  = Role::create(['name' => 'homes']);
        $permission = Permission::create(['name' => 'index homes']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'create homes']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'edit homes']);
        $role->givePermissionTo($permission);
        $permission = Permission::create(['name' => 'delete homes']);
        $role->givePermissionTo($permission);
    }
}
