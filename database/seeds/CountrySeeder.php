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
            ['id' => '1', 'name' => 'U.S-UK', 'image' => 'https://drive.google.com/uc?id=195Gz-pyyMd-X7kvLn9tL3h9zj58Kna09&export=media', 'description' => ''],
            ['id' => '2', 'name' => 'Việt Nam', 'image' => 'https://drive.google.com/uc?id=1lub6gl6Q2fjnsNTzAMmRJdWhQoSfTeZ8&export=media', 'description' => ''],
            ['id' => '3', 'name' => 'Japan', 'image' => 'https://drive.google.com/uc?id=1sofhZMpgRo4Efh9bEkfkVznl0Xao59Mn&export=media', 'description' => ''],
            ['id' => '4', 'name' => 'Korea', 'image' => 'https://drive.google.com/uc?id=12nxALMoN3FIBL47Fafs45Udlg7vcXYb3&export=media', 'description' => ''],
            // ['id' => '5', 'name' => 'China', 'image' => 'images/countrys/China.png', 'description' => ''],
            // ['id' => '6', 'name' => 'Laos', 'image' => 'images/countrys/Laos.png', 'description' => ''],
        ]);
    }
}
