<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['id' => '1', 'song_id' => '1', 'user_id' => '1','content' => 'Cool Comments'],
            ['id' => '2', 'song_id' => '2', 'user_id' => '2','content' => 'Cool Comments 2'],
            ['id' => '3', 'song_id' => '2', 'user_id' => '1','content' => 'Cool Comments 3'],
        ]);
    }
}
