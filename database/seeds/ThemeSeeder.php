<?php

use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
            ['id' => '1', 'name' => 'Hot US-UK', 'image' => 'https://drive.google.com/uc?id=1OhOso08_gmlzGt-JyV1XPfzkChrVRRQV&export=media','description' => ''],
            ['id' => '2', 'name' => 'Hot Viet Nam', 'image' => 'https://drive.google.com/uc?id=1Ui6ixaYQ3RnknrCSEhqyWm4ekbCnbs9I&export=media','description' => ''],
            ['id' => '3', 'name' => 'Hot K-POP', 'image' => 'https://drive.google.com/uc?id=1aW4Zi1LnzwY_sKrIkqDcgNyyzOFd3eS0&export=media','description' => ''],
            ['id' => '4', 'name' => 'Movie Songs', 'image' => 'https://drive.google.com/uc?id=1SCgKOvQr_sRhAkbg1tLx2PAeut5CmcQs&export=media','description' => ''],
            ['id' => '5', 'name' => 'EDM', 'image' => 'https://drive.google.com/uc?id=1mKegtEwPIwhRGzJ-2Qa1yWmE_2jz3mEI&export=media','description' => ''],
            ['id' => '6', 'name' => 'Gyms Songs', 'image' => 'https://drive.google.com/uc?id=1RjcENpXVhSrB14DTCgxz4devXkdpYMVg&export=media', 'description' => ''],
            ['id' => '7', 'name' => 'Singer US-UK', 'image' => 'https://drive.google.com/uc?id=1mKmZr9WRhpJZLQ__UXMTAVX5UDoW8yoR&export=media','description' => ''],
            ['id' => '8', 'name' => 'Singer Viet Nam', 'image' => 'https://drive.google.com/uc?id=13xaCJKzGkB1YpSXnEaWq643Hq0tZXenv&export=media','description' => ''],
        ]);
    }
}
