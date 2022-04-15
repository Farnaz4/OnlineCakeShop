<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;


class UsersTablesSeeder extends Seeder
{
   
    public function run()
    {
        //
        User::create([

            'name' => 'Farnaz Fawad',
            'email' => 'farnazfawad@gmail.com',
            'password' => Hash::make('password'),
            'remember_token'=> str_random(10),


        ]);


    }
}
