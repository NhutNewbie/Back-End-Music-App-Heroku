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
            ['id' => '1', 'name' => 'Hot US-UK', 'image' => 'images/themes/Hot-US-UK.png','description' => ''],
            ['id' => '2', 'name' => 'Hot Viet Nam', 'image' => 'images/themes/Hot-Viet-Nam.png','description' => ''],
            ['id' => '3', 'name' => 'Hot K-POP', 'image' => 'images/themes/K-POP.png','description' => ''],
            ['id' => '4', 'name' => 'Movie Songs', 'image' => 'images/themes/Movie.png','description' => ''],
            ['id' => '5', 'name' => 'EDM', 'image' => 'images/themes/EDM.png','description' => ''],
            ['id' => '6', 'name' => 'Gyms Songs', 'image' => 'images/themes/GYM.png','description' => ''],
            ['id' => '7', 'name' => 'Singer US-UK', 'image' => 'images/themes/Singer-US-UK.png','description' => ''],
            ['id' => '8', 'name' => 'Singer Viet Nam', 'image' => 'images/themes/Singer-Viet-Nam.png','description' => ''],
        ]);
    }
}
