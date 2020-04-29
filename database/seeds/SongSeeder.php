<?php

use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            ['id' => '1', 'artist_id' => '3', 'country_id' => '2', 'name' => '2 Triệu Năm', 'image' => 'images/songs/2-Trieu-Nam.png', 
            'audio' => 'audio/2-Trieu-Nam.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 1],

            ['id' => '2', 'artist_id' => '5', 'country_id' => '2', 'name' => '100 Year Love', 'image' => 'images/songs/100-Year-Love.png', 
            'audio' => 'audio/100-Years-Love.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 3],

            ['id' => '3', 'artist_id' => '1', 'country_id' => '1', 'name' => 'All Falls Down', 'image' => 'images/songs/All-Falls-Down.png', 
            'audio' => 'audio/All-Fall-Down.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '4', 'artist_id' => '1', 'country_id' => '1', 'name' => 'Alone', 'image' => 'images/songs/Alone.png', 
            'audio' => 'audio/Alone.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '5', 'artist_id' => '3', 'country_id' => '2', 'name' => 'Bài Này Chill Phết', 'image' => 'images/songs/Bai-Nay-Chill-Phet.png', 
            'audio' => 'audio/Bai-Nay-Chill-Phet.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '6', 'artist_id' => '6', 'country_id' => '1', 'name' => 'Careless', 'image' => 'images/songs/Careless.png', 
            'audio' => 'audio/Careless.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '7', 'artist_id' => '6', 'country_id' => '1', 'name' => 'Cold', 'image' => 'images/songs/Cold.png', 
            'audio' => 'audio/Cold.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '8', 'artist_id' => '3', 'country_id' => '2', 'name' => 'Đưa Nhau Đi Trốn', 'image' => 'images/songs/Dua-Nhau-Di-Tron.png', 
            'audio' => 'audio/Dua-Nhau-Di-Tron.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '9', 'artist_id' => '4', 'country_id' => '1', 'name' => 'Hey', 'image' => 'images/songs/Hey.png', 
            'audio' => 'audio/Hey.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '10', 'artist_id' => '3', 'country_id' => '2', 'name' => 'Mười Năm', 'image' => 'images/songs/Muoi-Nam.png', 
            'audio' => 'audio/Muoi-Nam.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '11', 'artist_id' => '5', 'country_id' => '2', 'name' => 'Rượu Tình', 'images' => 'images/songs/Ruou-Tinh.png', 
            'audio' => 'audio/Ruou-Tinh.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '12', 'artist_id' => '1', 'country_id' => '1', 'name' => 'Sing Me To Sleep', 'images' => 'images/songs/Sing-Me-To-Sleep.png', 
            'audio' => 'audio/Sing-Me-Sing-To-Sleep.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],
            
            ['id' => '13', 'artist_id' => '2', 'country_id' => '1', 'name' => 'The Nights', 'images' => 'images/songs/The-Nights.png', 
            'audio' => 'audio/The-Night.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '14', 'artist_id' => '1', 'country_id' => '1', 'name' => 'Unity', 'images' => 'images/songs/Unity.png', 
            'audio' => 'audio/Unity.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '15', 'artist_id' => '2', 'country_id' => '1', 'name' => 'Waiting For Love', 'images' => 'images/songs/Waiting-For-Love.png', 
            'audio' => 'audio/Waiting-For-Love.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '16', 'artist_id' => '2', 'country_id' => '1', 'name' => 'Wake Me Up', 'images' => 'images/songs/Wake-Me-Up.png', 
            'audio' => 'audio/Wake-Me-Up.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],
            
            ['id' => '17', 'artist_id' => '7', 'country_id' => '4', 'name' => 'Nocturnal', 'images' => 'images/songs/Nocturnal.png', 
            'audio' => 'audio/Nocturnal.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '18', 'artist_id' => '7', 'country_id' => '4', 'name' => 'Lunisolar', 'images' => 'images/songs/Lunisolar.png', 
            'audio' => 'audio/Lunisolar.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '19', 'artist_id' => '7', 'country_id' => '4', 'name' => 'Way Back Home', 'images' => 'images/songs/Way-Back-Home.png', 
            'audio' => 'audio/Way-Back-Home.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '20', 'artist_id' => '8', 'country_id' => '3', 'name' => 'Nandemonaiya', 'images' => 'images/songs/Nandemonaiya.png', 
            'audio' => 'audio/Nandemonaiya.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '21', 'artist_id' => '8', 'country_id' => '3', 'name' => 'Sparkle', 'images' => 'images/songs/Sparkle.png', 
            'audio' => 'audio/Sparkle.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],

            ['id' => '22', 'artist_id' => '8', 'country_id' => '3', 'name' => 'Zen zen zense', 'images' => 'images/songs/Zen-Zen-Zense.png', 
            'audio' => 'audio/Zen-Zen-Zense.mp3', 'views' => '0', 'dowloads' => '0', 'likes' => 0],
        ]);
    }
}
