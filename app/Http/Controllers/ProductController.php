<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Cart;
use App\Order;
use Auth;
use App\Http\Requests;
use Session;
class ProductController extends Controller
{
	public function getIndex()
    {
        $categories = Category::all();
        //$subcategories = SubCategory::all();
        $products = Product::all();
        // $orders = Auth::user()->orders;
        // $orders->transform(function($order,$key){
        //     $order->cart = unserialize($order->cart);
        //     return $order;
        // });
        return view('index',['categories' => $categories,'products' => $products]);
    }
    function getDetailProduct($id){
        $product = Product::find($id);
        return view('product.detail',['product' => $product]);
    }
    function getAddToCart(Request $request, $id){
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product,$product->id);

    	$request->session()->put('cart',$cart);
    	//dd(Session::get('cart'));
    	return redirect()->route('main');
    }
    function shoppingCart(){
    	if(!Session::has('cart')){
    		return view('product.cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('product.cart',['products' => $cart->items]);
    }
    function getPlusToCart($id){
    	$oldCart = Session::has('cart') ? Session::get('cart') : null ;
    	$cart = new Cart($oldCart);
    	$cart->plusToCart($id);
    	Session::put('cart',$cart);
    	return redirect()->route('product.shoppingCart');
    }
    function getReduceToCart($id){
    	$oldCart = Session::has('cart') ? Session::get('cart') : null ;
    	$cart = new Cart($oldCart);
    	$cart->reduceByOne($id);
    	Session::put('cart',$cart);
    	return redirect()->route('product.shoppingCart');
    }
    function getCheckout(){
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $order = new Order();
        $order->cart = serialize($cart);
        $order->status = 'pending';
        $order->payment = 'handle';

        Auth::user()->orders()->save($order);
        Session::forget('cart');
        return redirect()->route('main');
    }
}

