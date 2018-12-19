<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Order::destroy(2);

        // $product1 = Product::where('id',1)->first();
        // $product2 = Product::where('id',2)->first();
        // $money1 = $product1->price;
        // $money2 = $product2->price;
        // $number1 = 2;
        // $number2 = 3;
        // $order = new Order();
        // $order->money = $money1 * $number1 + $money2 * $number2 ;
        // $order->save();
        // $order_product = array();
        // $order->products()->attach($product1->id,['number_product' => $number1,'total' => $money1]);
        // $order->products()->attach($product2->id,['number_product' => $number2,'total' => $money2]);
    }
}
