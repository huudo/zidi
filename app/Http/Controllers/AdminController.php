<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
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
}
