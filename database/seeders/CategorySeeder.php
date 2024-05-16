<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [];

        for ($i = 1; $i <= 10; $i++) {
            $categories[] = [
                'name'        => 'カテゴリー' . $i,
                'description' => 'カテゴリー' . $i . 'の説明',
                'image_url'   => null,
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }

        DB::table('categories')->insert($categories);
    }
}
