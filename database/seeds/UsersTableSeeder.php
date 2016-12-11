<?php

use Illuminate\Database\Seeder;

use App\Model\ST_Users;

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
      ST_Users::insert([
        [
          'name'     => 'Chris Sevilleja',
          'username' => 'admin',
          'email'    => 'inimz25@gmail.com',
          'password' => Hash::make('1234'),
          'level'    => 9,
        ],
        [
          'name'     => 'Chris Sevilleja',
          'username' => 'user',
          'email'    => 'user@gmail.com',
          'password' => Hash::make('1234'),
          'level'    => 0,
        ]
      ]);
    }
}
