<?php

use Illuminate\Database\Seeder;

class PersonalPlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_playlists')->insert([
            ['id' => '1', 'user_id' => '1', 'name' => 'My Playlist 1', 'image' => ''],
            ['id' => '2', 'user_id' => '1', 'name' => 'My Playlist 2', 'image' => ''],
            ['id' => '3', 'user_id' => '1', 'name' => 'My Playlist 3', 'image' => ''],
            ['id' => '4', 'user_id' => '2', 'name' => 'My Playlist 1 2', 'image' => ''],
        ]);
    }
}
