<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
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
}
