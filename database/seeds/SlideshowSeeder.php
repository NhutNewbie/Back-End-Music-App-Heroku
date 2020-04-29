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
            ['id' => '1', 'song_id' => '4', 'name' => 'Alone 2 of Alan Walker 2020', 'image' => 'images/slideshows/Alone.png', 
                'sort' => '1', 'enable' => 'true'],
            ['id' => '2', 'song_id' => '18', 'name' => 'Lunisolar the song of Shaun', 'image' => 'images/slideshows/Lunisolar.png', 
                'sort' => '2', 'enable' => 'true'],
        ]);
    }
}
