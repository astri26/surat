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
        \App\User::insert([
        [
            'id_user' => '2',
            'username'  => 'admin',
            'password' => Hash::make('123'),
            'NIK'  => '351080220018208',
            'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
