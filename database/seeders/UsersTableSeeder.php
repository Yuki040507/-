<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'id_group'          => '1',
            'user_name'         => 'user',
            'email'             => 'user@example.com',
            'password'          => Hash::make('12345678'),
            'remember_token'    => Str::random(10),
        ]);
    }
}
