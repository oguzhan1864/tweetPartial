<?php

use Illuminate\Database\Seeder;

class TweetuserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweetusers')->insert([
            'username'=>Str::random(10),
            'password'=>Str::random(10)
        ]);
    }
}
