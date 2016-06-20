<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('test'),
            'type' => 'admin',
            'color' => 'gray',
        ]);
        DB::table('users')->insert([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('test'),
            'type' => 'manager',
            'color' => 'blue',
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'testuser@gmail.com',
            'password' => bcrypt('test'),
            'type' => 'user',
            'color' => 'red',
        ]);
    }

}
