<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        DB::table('inspection_sections')->insert([
            'title' => 'work at height',
        ]);

        DB::table('inspection_subsections')->insert([
            'inspection_section_id' => 1,
            'title' => 'work at height sub',
        ]);


        DB::table('users')->insert([
            'email' => "admin@musk.com",
            'password' => Hash::make('1234'),
            'role' => "admin",
        ]);

        DB::table('inspection_sites')->insert([
            'name' => 'Hammer Works',
            'icon' => 'icon3.png',
            'lat' => 52.207862,
            'long' => 0.121801,
        ]);



        DB::table('inspection_sites')->insert([
            'name' => 'Book Mine',
            'icon' => 'icon4.png',
            'lat' => 52.91610340678577,
            'long' => -1.7891139748472968,
        ]);


        DB::table('inspection_sites')->insert([
            'name' => 'Forest Hut',
            'icon' => 'icon1.png',
            'lat' => 50.79775067058368,
            'long' => -4.275887573395824,
        ]);


        DB::table('inspection_sites')->insert([
            'name' => 'Musashi Industries',
            'icon' => 'icon2.png',
            'lat' => 55.46864808713026,
            'long' => -2.9771329872332046,
        ]);
    }
}
