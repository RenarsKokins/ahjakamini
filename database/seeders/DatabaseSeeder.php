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
            ['path' => 'img/gallery/DSC_0001.jpg'],
            ['path' => 'img/gallery/DSC_0011 (1).jpg'],
            ['path' => 'img/gallery/DSC_0011-1 (1).jpg'],
            ['path' => 'img/gallery/DSC_0026.jpg'],
            ['path' => 'img/gallery/DSC_0039.jpg'],
            ['path' => 'img/gallery/DSC_0073 (1) (2).jpg'],
            ['path' => 'img/gallery/DSC_0108.jpg'],
            ['path' => 'img/gallery/DSC_0125 (3).jpg'],
            ['path' => 'img/gallery/DSC_0131 (2).jpg'],
            ['path' => 'img/gallery/DSC_0164.jpg'],
            ['path' => 'img/gallery/DSC_0209 (1).jpg'],
            ['path' => 'img/gallery/DSC_0212.jpg'],
            ['path' => 'img/gallery/DSC_0233 (1).jpg'],
            ['path' => 'img/gallery/DSC_0259 (1).jpg'],
            ['path' => 'img/gallery/DSC_0313 (2).jpg'],
            ['path' => 'img/gallery/DSC_0319.jpg'],
            ['path' => 'img/gallery/DSC_0330.jpg'],
            ['path' => 'img/gallery/DSC_0357.jpg'],
            ['path' => 'img/gallery/DSC_0405 (2).jpg'],
            ['path' => 'img/gallery/DSC_0427.jpg'],
            ['path' => 'img/gallery/DSC_0428.jpg'],
            ['path' => 'img/gallery/DSC_0471.jpg'],
            ['path' => 'img/gallery/DSC_0514.jpg'],
            ['path' => 'img/gallery/DSC_0561.jpg'],
            ['path' => 'img/gallery/DSC_0611.jpg'],
            ['path' => 'img/gallery/DSC_0685.jpg'],
            ['path' => 'img/gallery/DSC_0703 (1).jpg'],
            ['path' => 'img/gallery/DSC_0715 (2).jpg'],
            ['path' => 'img/gallery/DSC_0733 (1).jpg'],
            ['path' => 'img/gallery/DSC_0734.jpg'],
            ['path' => 'img/gallery/DSC_0765.jpg'],
            ['path' => 'img/gallery/DSC_0786 (1).jpg'],
            ['path' => 'img/gallery/DSC_0994 (1).jpg'],
            ['path' => 'img/gallery/DSC_1000 (1).jpg'],
            ['path' => 'img/gallery/Instagram123.jpg'],
            ['path' => 'img/gallery/LRM_EXPORT_33337628124267_20190926_115805295.jpeg'],
        ];
        DB::table('images')->insert($images);
    }
}
