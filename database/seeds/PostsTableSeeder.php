<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Monday',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('posts')->insert([
            'title' => 'Tuesday',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('posts')->insert([
            'title' => 'Wednesday',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('posts')->insert([
            'title' => 'Thursday',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'created_at'=>Carbon::now(),            
        ]);

        DB::table('posts')->insert([
            'title' => 'Friday',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'created_at'=>Carbon::now(),            
        ]);
    }
}
