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
        DB::table('users')->insert([
            'name' => 'AHJAadmin',
            'email' => 'ahjaadmin@ahjalatvia.lv',
            'password' => Hash::make('ahjaadminlatvia'),
        ]);

        DB::table('languages')->insert([
            'iso' => 'EN',
            'full' => 'English',
        ]);

        DB::table('languages')->insert([
            'iso' => 'LV',
            'full' => 'Latviešu',
        ]);

        DB::table('languages')->insert([
            'iso' => 'RU',
            'full' => 'Русский',
        ]);
    }
}
