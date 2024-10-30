<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'Smartphone XYZ',
                'description' => 'Smartphone de última generación con cámara de 108 MP.',
                'price' => 799.99,
                'stock_quantity' => 50,
                'sku' => 'SKU123456',
                'is_active' => true,
                'image_url' => 'https://short-link.me/Oyuz',
            ],
            [
                'category_id' => 1,
                'name' => 'Auriculares Inalámbricos',
                'description' => 'Auriculares con cancelación de ruido y batería de larga duración.',
                'price' => 199.99,
                'stock_quantity' => 30,
                'sku' => 'SKU123457',
                'is_active' => true,
                'image_url' => 'https://short-link.me/Oyvi',
            ],
            [
                'category_id' => 2,
                'name' => 'Camiseta de Algodón',
                'description' => 'Camiseta cómoda y ligera, ideal para el verano.',
                'price' => 19.99,
                'stock_quantity' => 100,
                'sku' => 'SKU123458',
                'is_active' => true,
                'image_url' => 'https://short-link.me/MbNC',
            ],
            [
                'category_id' => 2,
                'name' => 'Chaqueta Impermeable',
                'description' => 'Chaqueta ligera e impermeable perfecta para el clima lluvioso.',
                'price' => 79.99,
                'stock_quantity' => 60,
                'sku' => 'SKU123459',
                'is_active' => true,
                'image_url' => 'https://short-link.me/MbNF',
            ],
            [
                'category_id' =>'3', 
                'name' =>'Sofá Modular',
                'description' =>'Sofá modular de diseño moderno y elegante.',
                'price' =>'599.99',
                'stock_quantity' =>'20',
                'sku' =>'SKU123460', 
                'is_active' =>true, 
                'image_url' =>'https://short-link.me/MbNM'
            ],
            [
                'category_id'=>3,
                'name'=>'Juego de Utensilios de Cocina',
                'description'=>'Set completo con utensilios esenciales.',
                'price'=>39.99,
                'stock_quantity'=>80,
                'sku'=>'SKU123461',
                'is_active'=>true,
                'image_url'=>'https://short-link.me/MbNQ'
            ],
        ]);
    }
}