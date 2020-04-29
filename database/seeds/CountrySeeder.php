<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countrys')->insert([
            ['id' => '1', 'name' => 'U.S-UK', 'image' => 'images/countrys/U.S.-UK.png', 'description' => ''],
            ['id' => '2', 'name' => 'Việt Nam', 'image' => 'images/countrys/Viet-Nam.png', 'description' => ''],
            ['id' => '3', 'name' => 'Japan', 'image' => 'images/countrys/Japan.png', 'description' => ''],
            ['id' => '4', 'name' => 'Korea', 'image' => 'images/countrys/Korea.png', 'description' => ''],
            // ['id' => '5', 'name' => 'China', 'image' => 'images/countrys/China.png', 'description' => ''],
            // ['id' => '6', 'name' => 'Laos', 'image' => 'images/countrys/Laos.png', 'description' => ''],
        ]);
    }
}
