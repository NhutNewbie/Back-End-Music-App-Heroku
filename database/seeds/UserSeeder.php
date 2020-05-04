<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => '1', 'users_type_id' => '1', 'name' => 'Nguyen Hoang Nhut', 'email' => 'nhut2001dn@gmail.com', 'password' => Hash::make('123456'), 'avatar' => 'https://drive.google.com/uc?id=1Ndu43Dq5_LW_3_0kwL14fk2Bqi3xQ9pf&export=media'],
            ['id' => '2', 'users_type_id' => '2', 'name' => 'Hoang Minh Binh', 'email' => 'Binh2000dn@gmail.com', 'password' => Hash::make('123456'), 'avatar' => ''],
            ['id' => '3', 'users_type_id' => '2', 'name' => 'Dương Thị Kiều Oanh', 'email' => 'Oanh2000dn@gmail.com', 'password' => Hash::make('123456'), 'avatar' => ''],
        ]);
    }
}
