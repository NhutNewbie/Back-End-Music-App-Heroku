<?php

use Illuminate\Database\Seeder;

class SlideshowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slideshows')->insert([
            ['id' => '1', 'song_id' => '4', 'name' => 'Alone 2 of Alan Walker 2020', 'image' => 'https://drive.google.com/uc?id=1_iZAjV_a1P5Fw_x5nGIqP4mjiZ72g7gX&export=media', 
                'sort' => '1', 'enable' => 'true'],
            ['id' => '2', 'song_id' => '18', 'name' => 'Lunisolar the song of Shaun', 'image' => 'https://drive.google.com/uc?id=11qjWEktWmKtWMSgf8c4ujV4nBsTY3_YQ&export=media', 
                'sort' => '2', 'enable' => 'true'],
        ]);
    }
}
