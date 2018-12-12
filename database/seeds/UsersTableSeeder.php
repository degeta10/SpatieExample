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
            'name' => 'Degeta10',
            'email' => 'degeta10@gmail.com',
            'password' => Hash::make('qwe123'),
            'user_type' => 'admin',
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('users')->insert([
            'name' => 'Lano',
            'email' => 'lano10crazy@gmail.com',
            'password' => Hash::make('qwe123'),
            'user_type' => 'manager',
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('users')->insert([
            'name' => 'Angel',
            'email' => 'angel@gmail.com',
            'password' => Hash::make('qwe123'),
            'user_type' => 'user',
            'created_at'=>Carbon::now(),            
        ]);
    }
}
