<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create an admin user

        User::create([

            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'password'=>\Hash::make('password')

        ]);


        // create an scout user

        User::create([

            'name'=>'Scout',
            'email'=>'scout@gmail.com',
            'role'=>'scout',
            'password'=>\Hash::make('password')

        ]);
        

        // create an player user

        User::create([

            'name'=>'Player',
            'email'=>'player@gmail.com',
            'role'=>'player',
            'password'=>\Hash::make('password')

        ]);
        
    }
}
