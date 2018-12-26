<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Cart;
use App\Order;
use App\DetailOrder;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use Session;
use App\Http\Requests\CheckCartCheckout;
class ProductController extends Controller
{
	public function getIndex()
    {
        $categories = Category::with('subcategories')->get();
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
        $product = Product::findBySlug($id);
        $categories = Category::with('subcategories')->get();
        return view('product.detail',['product' => $product,'categories' => $categories]);
    }
    function getAddToCart(Request $request, $id){
        //$id = intval($id);
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product,$product->id);

    	$request->session()->put('cart',$cart);
    	// //dd(Session::get('cart'));
    	// return redirect()->route('main');
        return Response::json($cart->totalQty);
    }
    function shoppingCart(){
    	if(!Session::has('cart')){
    		return view('product.cart');
    	}
    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('product.cart',['products' => $cart->items,'totalPrice' => $cart->totalPrice]);
    }
    function postShoppingCart(CheckCartCheckout $request){
        $input = $request->all();
        if(!Auth::check()){
            return redirect()->route('signin');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $items = $cart->items;

        $order = new Order();
        $order->total_price = $cart->totalPrice;
        $order->total_profit = $cart->totalProfit;
        $order->name = $input['name-customer'];
        $order->address = $input['address'];
        $order->phone = $input['phone-number'];
        $order->status = 'pending';
        $order->payment = 'handle';
        $order->type = env('ORDER_OUT',2);
        Auth::user()->orders()->save($order);

        // Lưu lại chi tiết order để tính nhập xuất hàng cho từng sản phẩm
        foreach ($items as $key => $item) {
            //dd($product['price-in']);
            $order_detail = new DetailOrder();
            $order_detail->id_product = $item['item']['id'];
            $order_detail->qty = $item['qty'];
            $order_detail->price = $item['item']['price'];
            $order_detail->title = $item['item']['title'];
            $order_detail->orders()->associate($order);
            $order_detail->save();
        }
        Session::forget('cart');
        return redirect()->route('main');
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
        // $oldCart = Session::get('cart');
        // $cart = new Cart($oldCart);
        // $items = $cart->items;
        
        // $order = new Order();
        // $order->total_price = $cart->totalPrice;
        // $order->name = $shop_name;
        // $order->phone = $shop_phone;
        // $order->status = 'pending';
        // $order->payment = 'handle';
        // Auth::user()->orders()->save($order);

        // // Lưu lại chi tiết order để tính nhập xuất hàng cho từng sản phẩm
        // foreach ($items as $key => $item) {
        //     $detailOrder = new DetailOrder();
        //     $detailOrder->qty = $item['qty'];
        //     $detailOrder->price = $item['price'];
        //     $product = $item['item'];
        //     $detailOrder->title = $product['title'];
        //     $detailOrder->orders()->associate($order);
        //     $detailOrder->product()->associate($product);
        //     $detailOrder->save();               
        // }
        
        // Session::forget('cart');
        // return redirect()->route('main');
    }
    function getSearchName(Request $request){
        $products = Product::where('title', 'like', '%' . $request->value . '%')->get();
        return response()->json($products); 
    }
}

