<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => 'admin',
            'username' => 'admin123',
            'email' => 'admin@gmail.com',
            'alamat' => 'jember',
            'nohp' => '087745992321',
            'password' => Hash::make('password'),
        ]);
    }
}
