<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'read posts']);
        Permission::create(['name' => 'write posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'update posts']);
    }
}
