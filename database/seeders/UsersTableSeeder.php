<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Admin',
                'username'=> 'admin',
                'email'=> 'admin@gmail.com',
                'password'=>Hash::make('wibr4h4s14'),
                'role'=>'admin',
                'status'=>'active',
            ],
            [
                'name'=>'Agent',
                'username'=> 'agent',
                'email'=> 'agent@gmail.com',
                'password'=>Hash::make('wibr4h4s14'),
                'role'=>'agent',
                'status'=>'active',
            ],
            [
                'name'=>'User',
                'username'=> 'user',
                'email'=> 'user@gmail.com',
                'password'=>Hash::make('wibr4h4s14'),
                'role'=>'user',
                'status'=>'active',
            ],

        ]);
    }
}
