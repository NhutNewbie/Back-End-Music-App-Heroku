<?php

use Illuminate\Database\Seeder;

class PlaylistsSongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playlists_songs')->insert([
            ['id' => '1', 'playlist_id' => '1', 'song_id' => '4'],
            ['id' => '2', 'playlist_id' => '1', 'song_id' => '6'],
            ['id' => '3', 'playlist_id' => '2', 'song_id' => '2'],
            ['id' => '4', 'playlist_id' => '2', 'song_id' => '1'],
            ['id' => '5', 'playlist_id' => '2', 'song_id' => '10'],
            ['id' => '6', 'playlist_id' => '3', 'song_id' => '3'],
            ['id' => '7', 'playlist_id' => '3', 'song_id' => '4'],
            ['id' => '8', 'playlist_id' => '3', 'song_id' => '12'],
            ['id' => '9', 'playlist_id' => '3', 'song_id' => '14'],
            ['id' => '10', 'playlist_id' => '4', 'song_id' => '13'],
            ['id' => '11', 'playlist_id' => '4', 'song_id' => '15'],
            ['id' => '12', 'playlist_id' => '4', 'song_id' => '16'],
            ['id' => '13', 'playlist_id' => '6', 'song_id' => '6'],
            ['id' => '14', 'playlist_id' => '6', 'song_id' => '7'],
            ['id' => '15', 'playlist_id' => '7', 'song_id' => '1'],
            ['id' => '16', 'playlist_id' => '7', 'song_id' => '5'],
            ['id' => '17', 'playlist_id' => '7', 'song_id' => '8'],
            ['id' => '18', 'playlist_id' => '7', 'song_id' => '10'],
            ['id' => '19', 'playlist_id' => '8', 'song_id' => '6'],
            ['id' => '20', 'playlist_id' => '8', 'song_id' => '7'],
            ['id' => '21', 'playlist_id' => '5', 'song_id' => '9'],
        ]);
    }
}
