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
            'password' => md5('123456')
        ]);

        DB::table('users')->insert([
            'username' => 'AshenOne',
            'telephone' => '15152111900',
            'email' => 'i@kassading.com',
            'password' => md5('123456')
        ]);
    }
}
