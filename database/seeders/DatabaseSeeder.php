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

        $languages = [
            [
                'iso' => 'EN',
                'full' => 'English',
            ],
            [
                'iso' => 'LV',
                'full' => 'Latviešu',
            ],
            [
                'iso' => 'RU',
                'full' => 'Русский',
            ],
        ];
        DB::table('languages')->insert($languages);

        $images = [
            ['path' => 'img/gallery/DSC_0715 (2).webp'],
            ['path' => 'img/gallery/DSC_0733 (1).webp'],
            ['path' => 'img/gallery/DSC_0734.webp'],
            ['path' => 'img/gallery/DSC_0765.webp'],
            ['path' => 'img/gallery/DSC_0994 (1).webp'],
            ['path' => 'img/gallery/DSC_1000 (1).webp'],
            ['path' => 'img/gallery/Instagram123.webp'],
            ['path' => 'img/gallery/LRM_EXPORT_33337628124267_20190926_115805295.webp'],
            ['path' => 'img/gallery/DSC_0001.webp'],
            ['path' => 'img/gallery/DSC_0011 (1).webp'],
            ['path' => 'img/gallery/DSC_0011-1 (1).webp'],
            ['path' => 'img/gallery/DSC_0026.webp'],
            ['path' => 'img/gallery/DSC_0039.webp'],
            ['path' => 'img/gallery/DSC_0073 (1) (2).webp'],
            ['path' => 'img/gallery/DSC_0108.webp'],
            ['path' => 'img/gallery/DSC_0125 (3).webp'],
            ['path' => 'img/gallery/DSC_0131 (2).webp'],
            ['path' => 'img/gallery/DSC_0164.webp'],
            ['path' => 'img/gallery/DSC_0209 (1).webp'],
            ['path' => 'img/gallery/DSC_0212.webp'],
            ['path' => 'img/gallery/DSC_0233 (1).webp'],
            ['path' => 'img/gallery/DSC_0259 (1).webp'],
            ['path' => 'img/gallery/DSC_0313 (2).webp'],
            ['path' => 'img/gallery/DSC_0319.webp'],
            ['path' => 'img/gallery/DSC_0330.webp'],
            ['path' => 'img/gallery/DSC_0357.webp'],
            ['path' => 'img/gallery/DSC_0405 (2).webp'],
            ['path' => 'img/gallery/DSC_0427.webp'],
            ['path' => 'img/gallery/DSC_0428.webp'],
            ['path' => 'img/gallery/DSC_0471.webp'],
            ['path' => 'img/gallery/DSC_0514.webp'],
            ['path' => 'img/gallery/DSC_0561.webp'],
            ['path' => 'img/gallery/DSC_0611.webp'],
            ['path' => 'img/gallery/DSC_0685.webp'],
            ['path' => 'img/gallery/DSC_0703 (1).webp'],
            ['path' => 'img/gallery/DSC_0786 (1).webp'],
        ];
        DB::table('images')->insert($images);
    }
}
