<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'accounts']);
        Role::create(['name' => 'cashier']);

        $role = Role::findById(1);
        $permission = Permission::all();
        $role->givePermissionTo($permission);

        $role = Role::findById(2);
        $permission = Permission::findById(1);
        $role->givePermissionTo($permission);
        $permission = Permission::findById(2);
        $role->givePermissionTo($permission);
        $permission = Permission::findById(4);
        $role->givePermissionTo($permission);

        $role = Role::findById(3);
        $permission = Permission::findById(1);
        $role->givePermissionTo($permission);
        $permission = Permission::findById(2);
        $role->givePermissionTo($permission);
      
    }
}
