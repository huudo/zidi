<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
use App\OrderIn;
use App\OrderInDetail;

use App\Http\Requests\CheckMerchandiseRequest;
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

    public function postAddProduct(Request $request, $id){
    	$sub = SubCategory::find($id);
    	$product = new Product();
    	$product->title = $request->title;
    	$product->description = $request->description;
    	$product->picture = 'https://img.deusm.com/informationweek/2014/09/1316005/apple_watch.png';
    	$product->price = $request->price;

    	$product->sub_categories()->associate($sub);
    	$product->save();
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
        $orders = OrderIn::all();
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
        $orderIn = new OrderIn();
        $orderIn->total_price = $total_price;
        $orderIn->shop_name = $shop_name;
        $orderIn->shop_phone = $shop_phone;
        $orderIn->status = 'requesting';
        $orderIn->payment = 'pending';
        $orderIn->save();

        // Lưu chi tiết Order
        foreach ($products as $key => $product) {
            //dd($product['price-in']);
            $order_detail = new OrderInDetail();
            $order_detail->id_product = $key;
            $order_detail->pty = $product['pty'];
            $order_detail->price = $product['price-in'];
            $order_detail->title = $product['title'];
            $order_detail->oderIns()->associate($orderIn);
            $order_detail->save();
        }
        return redirect()->route('admin.merchandise');
    }

    public function addElementProduct(Request $request){
        $id = $request->input('id');
        $product = Product::find($id);
        $returnHTML = view('admin.elementProduct')->with('product', $product)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML,'product' => $product));
    }
    
    public function getShipment(){
        return view('admin.shipment');
    }

}
