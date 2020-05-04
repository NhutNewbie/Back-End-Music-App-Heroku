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
            ['id' => '1', 'country_id' => '1', 'name' => 'Alan Walker', 'sex' => '1', 'avatar' => 'https://drive.google.com/uc?id=1MNggrMixvrKHTxgD2gWcKQUZ16du23h0&export=media', 'description' => ''],
            ['id' => '2', 'country_id' => '1', 'name' => 'Avicii', 'sex' => '1', 'avatar' => 'https://drive.google.com/uc?id=1X-Xji3yHh0W9J31eBlSfg7AjxKc6FaEO&export=media', 'description' => ''],
            ['id' => '3', 'country_id' => '2', 'name' => 'Den Vâu', 'sex' => '1', 'avatar' => 'https://drive.google.com/uc?id=1FVBZjfIdK8D4b5cD_MMijLzHTorWBk9R&export=media', 'description' => ''],
            ['id' => '4', 'country_id' => '1', 'name' => 'Fais', 'sex' => '1', 'avatar' => 'https://drive.google.com/uc?id=1QZRrrjHWfUN3SBiA715o60KPZTiS0KgI&export=media', 'description' => ''],
            ['id' => '5', 'country_id' => '2', 'name' => 'Nam Đức', 'sex' => '1', 'avatar' => 'https://drive.google.com/uc?id=1Wtge4WGCwEoKmK3XYy7P1-Ql9nYe9cat&export=media', 'description' => ''],
            ['id' => '6', 'country_id' => '1', 'name' => 'Neffex', 'sex' => '1', 'avatar' => 'https://drive.google.com/uc?id=1hJvPeeTIwUIsV6BzLj7NnHHhLEAQ6mJS&export=media', 'description' => ''],
            ['id' => '7', 'country_id' => '4', 'name' => 'Shaun', 'sex' => '1', 'avatar' => 'https://drive.google.com/uc?id=1CEvoXU5CzLc8r-bY8rvQDEdFLCYmvBD6&export=media', 'description' => ''],
            ['id' => '8', 'country_id' => '3', 'name' => 'Radwiwps', 'sex' => '1', 'avatar' => 'https://drive.google.com/uc?id=1Xhb6xeVxduqyeye8I1jM7v4ZdGvLbBSE&export=media', 'description' => ''],
        ]);
    }
}