<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'nama' => 'admin',
            'avatar' => 'avatars-5b17fae1cd400.png',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 1
        ]);
    }
}
 