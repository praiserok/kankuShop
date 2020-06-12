<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Продукт 1_1',
                'code' => 'prod1_1',
                'category_id' => '1',
                'description' => 'Опис 1 продукту 1 категорії',
                'price' => '100',
                'image' => 'products/pro1_1.png',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Продукт 1_2',
                'code' => 'prod1_2',
                'category_id' => '1',
                'description' => 'Опис 2 продукту 1 категорії',
                'price' => '100',
                'image' => 'products/pro1_2.png',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Продукт 1_3',
                'code' => 'prod1_3',
                'category_id' => '1',
                'description' => 'Опис 3 продукту 1 категорії',
                'price' => '100',
                'image' => 'products/pro1_3.png',
                'count' => rand(0, 10),
            ],

            [
                'name' => 'Продукт 2_1',
                'code' => 'prod2_1',
                'category_id' => '2',
                'description' => 'Опис 1 продукту 2 категорії',
                'price' => '200',
                'image' => 'products/pro2_1.png',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Продукт 2_2',
                'code' => 'prod2_2',
                'category_id' => '2',
                'description' => 'Опис 2 продукту 2 категорії',
                'price' => '200',
                'image' => 'products/pro2_2.png',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Продукт 2_3',
                'code' => 'prod2_3',
                'category_id' => '2',
                'description' => 'Опис 3 продукту 2 категорії',
                'price' => '200',
                'image' => 'products/pro2_3.png',
                'count' => rand(0, 10),
            ],

            [
                'name' => 'Продукт 3_1',
                'code' => 'prod3_1',
                'category_id' => '3',
                'description' => 'Опис 1 продукту 3 категорії',
                'price' => '300',
                'image' => 'products/pro3_1.png',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Продукт 3_2',
                'code' => 'prod3_2',
                'category_id' => '3',
                'description' => 'Опис 2 продукту 3 категорії',
                'price' => '300',
                'image' => 'products/pro3_2.png',
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Продукт 3_3',
                'code' => 'prod3_3',
                'category_id' => '3',
                'description' => 'Опис 3 продукту 3 категорії',
                'price' => '300',
                'image' => 'products/pro3_3.png',
                'count' => rand(0, 10),
            ]
        ]);
    }
}
