<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('qwe123'),
            'user_type' => 'admin',
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('users')->insert([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('qwe123'),
            'user_type' => 'manager',
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('users')->insert([
            'name' => 'Accounts',
            'email' => 'accounts@gmail.com',
            'password' => Hash::make('qwe123'),
            'user_type' => 'accounts',
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('users')->insert([
            'name' => 'Cashier',
            'email' => 'cashier@gmail.com',
            'password' => Hash::make('qwe123'),
            'user_type' => 'cashier',
            'created_at'=>Carbon::now(),            
        ]);
    }
}
