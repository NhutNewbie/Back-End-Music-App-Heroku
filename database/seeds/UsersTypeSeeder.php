<?php

use Illuminate\Database\Seeder;

class UsersTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_types')->insert([
            ['id' => '1', 'user_position' => 'Admin', 'description' => ''],
            ['id' => '2', 'user_position' => 'User', 'description' => ''],
        ]);
    }
}
