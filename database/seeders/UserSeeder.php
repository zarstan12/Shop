<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    
    public function run(): void
    {
       DB::table('users')->insert([

        [
        'id'=> 1,
        'name' => 'juan',
        'last_name' => 'rodriguez',
        'phone' => 300024134,
        'age' => 24,
        ],

        [
            'id'=> 2,

            'name'=> 'miguel',
            'last_name' => 'carbajal',
            'phone' => 432042332,
            'age'=> 21,
        ],

        [
        
        ]

       ]);
    }
}
