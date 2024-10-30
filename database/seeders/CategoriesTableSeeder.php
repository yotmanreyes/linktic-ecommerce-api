<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            ['name' => 'Electrónica', 'feature_image' => 'https://short-link.me/MbCd'],
            ['name' => 'Ropa','feature_image' => 'https://short-link.me/OyjT'],
            ['name' => 'Hogar y Jardín','feature_image' => 'https://short-link.me/MbCs'],
            ['name' => 'Deportes','feature_image' => 'https://short-link.me/Oyke'],
            ['name' => 'Juguetes','feature_image' => 'https://short-link.me/MbCL'],
        ]);
    }
}
