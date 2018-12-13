<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Cart;
use App\Http\Requests;
use Session;
class ProductController extends Controller
{
	public function getIndex()
    {
        $categories = Category::all();
        //$subcategories = SubCategory::all();
        $products = Product::all();
        return view('index',['categories' => $categories,'products' => $products]);
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
}

