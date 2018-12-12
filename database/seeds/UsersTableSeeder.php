<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

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
            'name' => 'angel',
            'email' => 'degeta10@gmail.com',
            'password' => Hash::make('qwe123'),
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('users')->insert([
            'name' => 'Lano',
            'email' => 'lano10crazy@gmail.com',
            'password' => Hash::make('qwe123'),
            'created_at'=>Carbon::now(),            
        ]);
    }
}
