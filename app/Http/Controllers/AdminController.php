<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
use App\ProductImage;
use App\Order;
use App\DetailOrder;
use Auth;
use App\Http\Requests\CheckMerchandiseRequest;
use App\Http\Requests\CheckCreateProduct;
use App\Http\Requests\CheckCreateShipment;
class AdminController extends Controller
{
	public function __construct()
    {
        //$this->middleware('auth');
        ///$this->roles(['Admin']);
    }

    public function getAdminPage(){
    	
    	return view('admin.index');
    }

    public function getDanhMuc(Request $request,$id){
    	$category = Category::find($id);
    	$subcategories = Category::find($id)->subcategories;
    	return view('admin.category',['category'=>$category,'subcategories' => $subcategories]);
    }

    public function postAddCategory(Request $request,$id){
    	$category = Category::find($id);
    	$description = $request->description;
    	$name = $request->name;
    	$subcategory = new SubCategory();
    	$subcategory->name = $name;
    	$subcategory->description = $description;
    	$subcategory->categories()->associate($category);
    	$subcategory->save();
    	return redirect()->route('admin.danhmuc',['id'=>$id]);
    }

    public function getDanhMucCon($id){
    	$sub = SubCategory::find($id);
    	$products = $sub->products;
    	return view('admin.subCategory',['sub'=>$sub,'products' => $products]);
    }

    public function postAddProduct(CheckCreateProduct $request, $id){
        $input = $request->all();

    	$sub = SubCategory::find($id);
    	$product = new Product();
    	$product->title = $input['title'];
    	$product->description = $input['description'];
        $product->sort_description = substr(strip_tags($input['description']),0,350);
    	$product->picture = 'https://img.deusm.com/informationweek/2014/09/1316005/apple_watch.png';
    	$product->price = $input['price'];
        $product->price_in = $input['price-in'];
    	$product->sub_categories()->associate($sub);
    	$product->save();

        foreach ($request->photos as $photo) {
            $file_name = $photo->store('images');
            $image = new ProductImage();
            $image->path_url = $file_name;
            $product->images()->save($image);
        }
        
    	return redirect()->route('admin.subCategory',['id'=>$id]);
    }

    public function getEditProduct($id){
        $product = Product::find($id);
        return view('admin.editProduct',['product'=>$product]);
    }

    public function postEditProduct(Request $request,$id){
        $product = Product::find($id);
        $title = $request->title;
        $price = $request->price;
        $description = $request->description;

        $product->title = $title;
        $product->price = $price;
        $product->description = $description;
        $product->save();
        return redirect()->route('admin.editProduct',['id'=>$id]);
        //$title = 
    }

    public function getDeleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function getMerchandise(){
        $orders = Order::where('type',env('ORDER_IN',''))->get();
        return view('admin.merchandise',['orders' => $orders]);
    }

    public function getMerchandiseCreate(){
        return view('admin.merchandiseCreate');
    }

    public function postMerchandiseCreate(CheckMerchandiseRequest $request){

        $input = $request->all();
        $products = $input['product']; 
        $shop_name = $input['shop-name'];
        $shop_phone = $input['shop-phone'];
        $total_price = $input['total-price'];

        // Lư order mới
        $order = new Order();
        $order->total_price = $total_price;
        $order->name = $shop_name;
        $order->phone = $shop_phone;
        $order->status = 'requesting';
        $order->payment = 'pending';
        $order->type = env('ORDER_IN');
        Auth::user()->orders()->save($order);

        // Lưu chi tiết Order
        foreach ($products as $key => $product) {
            //dd($product['price-in']);
            $order_detail = new DetailOrder();
            $order_detail->id_product = $key;
            $order_detail->qty = $product['pty'];
            $order_detail->price = $product['price-in'];
            $order_detail->title = $product['title'];
            $order_detail->orders()->associate($order);
            $order_detail->save();
        }
        return redirect()->route('admin.merchandise');
    }

    public function addElementProduct(Request $request,$type){
        //dd($type);
        $id = $request->input('id');
        $product = Product::find($id);
        if($type == 'merchandise'){
            $returnHTML = view('admin.elementProduct')->with('product', $product)->render();
        }elseif ($type == 'shipment') {
            $returnHTML = view('admin.elementShipment')->with('product', $product)->render();
        }
        
        return response()->json(array('success' => true, 'html'=>$returnHTML,'product' => $product));
    }
    
    public function getShipment(){
        $type = env('ORDER_OUT',2);
        $orders = Order::where('type',$type)->get();
        return view('admin.shipment',['orders' => $orders]);
    }
    public function getShipmentCreate(){
        return view('admin.shipmentCreate');
    }
    public function postShipmentCreate(CheckCreateShipment $request){
        $input = $request->all();
        $products = $input['product']; 
        $customer_name = $input['customer-name'];
        $customer_phone = $input['customer-phone'];
        $customer_address = $input['customer-address'];
        $total_price = $input['total-price'];
        $total_profit = $input['total-profit'];

        // Lư order mới
        $order = new Order();
        $order->total_price = $total_price;
        $order->total_profit = $total_profit;

        $order->name = $customer_name;
        $order->phone = $customer_phone;
        $order->address = $customer_address;
        $order->status = 'requesting';
        $order->payment = 'pending';
        $order->type = env('ORDER_OUT',2);
        Auth::user()->orders()->save($order);

        // Lưu chi tiết Order
        foreach ($products as $key => $product) {
            //dd($product['price-in']);
            $order_detail = new DetailOrder();
            $order_detail->id_product = $key;
            $order_detail->qty = $product['pty'];
            $order_detail->price = $product['price'];
            $order_detail->title = $product['title'];
            $order_detail->orders()->associate($order);
            $order_detail->save();
        }
        return redirect()->route('admin.shipment');
    }

}
