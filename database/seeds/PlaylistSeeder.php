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
            ['id' => '1', 'theme_id' => '1', 'name' => 'Hot US-UK 2020', 'image' => 'https://drive.google.com/uc?id=1zEVEqWYo9Idod3xsODfM14uFS5-eFBoo&export=media', 'views' => '0'],
            ['id' => '2', 'theme_id' => '2', 'name' => 'Hot Viet Nam 2020', 'image' => 'https://drive.google.com/uc?id=1F0gbACVtpnas35D2Ju_Je6-DtISAhpzX&export=media', 'views' => '0'],
            ['id' => '3', 'theme_id' => '7', 'name' => 'The Songs Of AlanWalker', 'image' => 'https://drive.google.com/uc?id=1GxFo3AdGOKhz9H1PhDtUUyVOarySEh3Z&export=media', 'views' => '0'],
            ['id' => '4', 'theme_id' => '7', 'name' => 'The Songs Of Avicii', 'image' => 'https://drive.google.com/uc?id=1bZv3EqR_RAwwV9Tz7aC2_qZYq6FgjBQL&export=media', 'views' => '0'],
            ['id' => '5', 'theme_id' => '7', 'name' => 'The Songs Of Fais', 'image' => 'https://drive.google.com/uc?id=1k9oJNlhVAvwI27HIE91qUDl0JHMkV0oW&export=media', 'views' => '0'],
            ['id' => '6', 'theme_id' => '7', 'name' => 'The Songs Of Neffex', 'image' => 'https://drive.google.com/uc?id=1VSrMz-Cr0d3e8mNyeN2EVdo3P9UzndM2&export=media', 'views' => '0'],
            ['id' => '7', 'theme_id' => '8', 'name' => 'The Songs Of Đen Vâu', 'image' => 'https://drive.google.com/uc?id=1DrspUq7fggXBwT-TmPCP_UfxPHYQcsbF&export=media', 'views' => '0'],
            ['id' => '8', 'theme_id' => '5', 'name' => 'Best Song EDM', 'image' => 'https://drive.google.com/uc?id=1-FV-xPsHKb-I-oQrhwRNaPIVo85_qhva&export=media', 'views' => '0'],
        ]);
    }
}
