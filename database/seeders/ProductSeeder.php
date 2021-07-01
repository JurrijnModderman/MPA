<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\Product([
            'image' => '...',
            'title' => 'product1',
            'description' => 'description1',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'image' => '...',
            'title' => 'product2',
            'description' => 'description2',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'image' => '...',
            'title' => 'product3',
            'description' => 'description3',
            'price' => 12
        ]);
        $product->save();
    }
}
