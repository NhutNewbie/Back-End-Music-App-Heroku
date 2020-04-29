<?php

use Illuminate\Database\Seeder;

class PersonalPlaylistSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_playlists_songs')->insert([
            ['id' => '1', 'personal_playlist_id' => '1', 'song_id' => '1'],
            ['id' => '2', 'personal_playlist_id' => '1', 'song_id' => '2'],
            ['id' => '3', 'personal_playlist_id' => '1', 'song_id' => '3'],
            ['id' => '4', 'personal_playlist_id' => '2', 'song_id' => '4'],
        ]);
    }
}
