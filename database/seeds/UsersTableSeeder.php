<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
                'id'             => 1,
                'name'           => 'admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('admin'),
                'remember_token' => null,
                'admin_mode' => true,
                'user_character_id' => null,
                'created_at'     => '2019-03-11 00:03:00',
                'updated_at'     => '2019-03-11 00:03:00'
            ],
            [
                'id'             => 2,
                'name'           => 'user',
                'email'          => 'userd@user.com',
                'password'       =>  bcrypt('user'),
                'remember_token' => null,
                'admin_mode' => false,
                'user_character_id' => null,
                'created_at'     => '2019-03-11 00:03:00',
                'updated_at'     => '2019-03-11 00:03:00'
            ],
        ]);
    }
}
