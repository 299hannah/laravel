<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Product #1',
            'detail' => 'Product #1 details'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Car',
            'detail' => 'Reselling a car @KSH250,000'
        ]);
        $product->save();
    }
}
