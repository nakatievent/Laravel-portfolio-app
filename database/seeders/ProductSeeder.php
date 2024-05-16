<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [];

        for ($i = 1; $i <= 500; $i++) {
            $products[] = [
                'name'          => '商品' . $i,
                'category_id'   => rand(1, 10),
                'brand_id'      => rand(1, 10),
                'review_id'     => rand(1, 10),
                'description'   => '商品' . $i . 'の説明',
                'price'         => rand(100, 100000),
                'stock'         => rand(0, 100),
                'sku'           => 'SKU' . $i,
                'image_url'     => null,
                'brand'         => null,
                'size'          => null,
                'status'        => true,
                'discount'      => rand(0, 50) / 10,
                'reviews_count' => rand(0, 100),
                'created_at'    => now(),
                'updated_at'    => now(),
            ];
        }

        DB::table('products')->insert($products);
    }
}
