<?php

use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            ['id' => '1', 'country_id' => '1', 'name' => 'Alan Walker', 'sex' => '1', 'avatar' => 'images/artists/Alan-Walker.png', 'description' => ''],
            ['id' => '2', 'country_id' => '1', 'name' => 'Avicii', 'sex' => '1', 'avatar' => 'images/artists/Avicii.png', 'description' => ''],
            ['id' => '3', 'country_id' => '2', 'name' => 'Den Vâu', 'sex' => '1', 'avatar' => 'images/artists/Den-Vau.png', 'description' => ''],
            ['id' => '4', 'country_id' => '1', 'name' => 'Fais', 'sex' => '1', 'avatar' => 'images/artists/Fais.png', 'description' => ''],
            ['id' => '5', 'country_id' => '2', 'name' => 'Nam Đức', 'sex' => '1', 'avatar' => 'images/artists/Nam-Duc.png', 'description' => ''],
            ['id' => '6', 'country_id' => '1', 'name' => 'Neffex', 'sex' => '1', 'avatar' => 'images/artists/Neffex.png', 'description' => ''],
            ['id' => '7', 'country_id' => '4', 'name' => 'Shaun', 'sex' => '1', 'avatar' => 'images/artists/Shaun.png', 'description' => ''],
            ['id' => '8', 'country_id' => '3', 'name' => 'Radwiwps', 'sex' => '1', 'avatar' => 'images/artists/Radwimps.png', 'description' => ''],
        ]);
    }
}