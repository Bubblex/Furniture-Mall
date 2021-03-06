<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Jarvis',
            'telephone' => '15152111900',
            'email' => 'i@kassading.com',
            'money' => 1000,
            'password' => md5('123456')
        ]);

        DB::table('users')->insert([
            'username' => 'AshenOne',
            'telephone' => '15152111900',
            'email' => 'i@kassading.com',
            'money' => 10000,
            'password' => md5('123456')
        ]);

        DB::table('users')->insert([
            'username' => 'admin',
            'telephone' => '15152111900',
            'email' => 'i@kassading.com',
            'money' => 10000,
            'role_id' => 2,
            'password' => md5('123456')
        ]);
    }
}
