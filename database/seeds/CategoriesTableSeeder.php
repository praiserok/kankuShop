<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Категорія 1',
                'code' => 'cat1',
                'description' => 'Опис першої категорії',
                'image' => 'categories/cat1.png'
            ],
            [
                'name' => 'Категорія 2',
                'code' => 'cat2',
                'description' => 'Опис другої категорії',
                'image' => 'categories/cat2.png'
            ],
            [
                'name' => 'Категорія 3',
                'code' => 'cat3',
                'description' => 'Опис третьої  категорії',
                'image' => 'categories/cat3.png'
            ],
        ]);
    }
}
