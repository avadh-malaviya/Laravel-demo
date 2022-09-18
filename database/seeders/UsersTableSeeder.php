<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'role_id' => 1,
            'name' => 'Avadh Malaviya',
            'email' => 'avadh.panthercodx@gmail.com',
            'password' => Hash::make('123')
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => Hash::make('123')
        ]);
    }
}
