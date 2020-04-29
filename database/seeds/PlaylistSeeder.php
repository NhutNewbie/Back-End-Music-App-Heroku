<?php

use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playlists')->insert([
            ['id' => '1', 'theme_id' => '1', 'name' => 'Hot US-UK 2020', 'image' => 'images/playlists/Hot-US-UK-2020.png', 'views' => '0'],
            ['id' => '2', 'theme_id' => '2', 'name' => 'Hot Viet Nam 2020', 'image' => 'images/playlists/Hot-Viet-Nam-2020.png', 'views' => '0'],
            ['id' => '3', 'theme_id' => '7', 'name' => 'The Songs Of AlanWalker', 'image' => 'images/playlists/Song-Of-AlanWalker.png', 'views' => '0'],
            ['id' => '4', 'theme_id' => '7', 'name' => 'The Songs Of Avicii', 'image' => 'images/playlists/Song-Of-Avicii.png', 'views' => '0'],
            ['id' => '5', 'theme_id' => '7', 'name' => 'The Songs Of Fais', 'image' => 'images/playlists/Song-Of-Fais.png', 'views' => '0'],
            ['id' => '6', 'theme_id' => '7', 'name' => 'The Songs Of Neffex', 'image' => 'images/playlists/Song-Of-Neffex.png', 'views' => '0'],
            ['id' => '7', 'theme_id' => '8', 'name' => 'The Songs Of Đen Vâu', 'image' => 'images/playlists/Song-Of-Den-Vau.png', 'views' => '0'],
            ['id' => '8', 'theme_id' => '5', 'name' => 'Best Song EDM', 'image' => 'images/playlists/Best-Songs-EDM.png', 'views' => '0'],
        ]);
    }
}
