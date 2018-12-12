<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = "Kem Dưỡng da";
        $product->price = 120000;
        $product->save();

        $product = new Product();
        $product->name = "Mặt nạ";
        $product->price = 15000;
        $product->save();

        $product = new Product();
        $product->name = "Sữa rửa mặt";
        $product->price = 200000;
        $product->save();
    }
}
