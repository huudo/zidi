<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
	'uses' => 'ProductController@getIndex',
	'as' => 'main'
]);
Route::get('/author',[
	'uses' => 'AppController@getAuthorPage',
	'as' => 'author',
	'middleware' => 'roles',
	'roles' => ['Admin','Author']
]);
Route:: get('/author/generate-article',[
	'uses' => 'AppController@getGenerateArticle',
	'as' => 'author.article',
	'middleware' => 'roles',
	'roles' => ['Admin','Author']
]);
Route::get('/signup',[
	'uses' => 'AuthController@getSignUpPage',
	'as' => 'signup'
]);
Route::post('/signup',[
	'uses' => 'AuthController@postSignup',
	'as' => 'signup'
]);
Route::get('/signin',[
	'uses' => 'AuthController@getSignInPage',
	'as' => 'signin'
]);
Route::post('/signin',[
	'uses' => 'AuthController@postSignIn',
	'as' => 'signin'
]);
Route::get('/logout',[
	'uses' => 'AuthController@getLogout',
	'as' => 'logout'
]);
Route::get('/product/{id}',[
	'uses' => 'ProductController@getDetailProduct',
	'as' => 'product.getDetailProduct'
]);
Route::get('/add-to-cart/{id}',[
	'uses' => 'ProductController@getAddToCart',
	'as' => 'product.addToCart'
]);
Route::get('/shopping-cart',[
	'uses' => 'ProductController@shoppingCart',
	'as' => 'product.shoppingCart'
]);
Route::post('/shopping-cart',[
	'uses' => 'ProductController@postShoppingCart',
	'as' => 'product.shoppingCart'
]);
Route::get('/reduce-to-cart/{id}',[
	'uses' => 'ProductController@getReduceToCart',
	'as' => 'product.reduce'
]);
Route::get('/plus-to-cart/{id}',[
	'uses' => 'ProductController@getPlusToCart',
	'as' => 'product.plusToCart'
]);
Route::get('/list-orders',[
	'uses' => 'ProductController@getListOrders',
	'as' => 'product.listOrders',
	'middleware' => 'roles',
	'roles' => ['User','Admin']
]);

Route::get('/search/name',[
	'uses' => 'ProductController@getSearchName',
	'as' => 'product.searchName'
]);
// Route::get('/admin',[
// 	'uses' => 'AdminController@getAdminPage',
// 	'as' => 'admin'
// ]);
// Route::post('/admin/assign-roles',[
// 	'uses' => 'AppController@postAdminAssignRoles',
// 	'as' => 'admin.assign'
// ]);
Route::prefix('admin')->group(function () {
	Route::get('/',[
		'uses' => 'AdminController@getAdminPage',
		'as' => 'admin',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::get('/danh-muc/{id}',[
		'uses' => 'AdminController@getDanhMuc',
		'as' => 'admin.danhmuc',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::post('/danh-muc/{id}/addCategory',[
		'uses' => 'AdminController@postAddCategory',
		'as' => 'admin.addCategory',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::get('danh-muc-con/{id}',[
		'uses' => 'AdminController@getDanhMucCon',
		'as' => 'admin.subCategory',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::post('product/{id}/addProduct',[
		'uses' => 'AdminController@postAddProduct',
		'as' => 'admin.addProduct',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::get('product/{id}/edit',[
		'uses' => 'AdminController@getEditProduct',
		'as' => 'admin.editProduct',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::post('product/{id}/edit',[
		'uses' => 'AdminController@postEditProduct',
		'as' => 'admin.editProduct',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::get('product/{id}/delete',[
		'uses' => 'AdminController@getDeleteProduct',
		'as' => 'admin.deleteProduct',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::get('merchandise',[
		'uses' => 'AdminController@getMerchandise',
		'as' => 'admin.merchandise',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::get('merchandise/create',[
		'uses' => 'AdminController@getMerchandiseCreate',
		'as' => 'admin.merchandiseCreate',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::post('merchandise/create',[
		'uses' => 'AdminController@postMerchandiseCreate',
		'as' => 'admin.merchandiseCreate',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::get('addElementProduct/{type}',[
		'uses' => 'AdminController@addElementProduct',
		'as' => 'admin.addElementProduct',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::get('shipment',[
		'uses' => 'AdminController@getShipment',
		'as' => 'admin.shipment',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::get('shipment/create',[
		'uses' => 'AdminController@getShipmentCreate',
		'as' => 'admin.shipmentCreate',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
	Route::post('shipment/create',[
		'uses' => 'AdminController@postShipmentCreate',
		'as' => 'admin.shipmentCreate',
		'middleware' => 'roles',
		'roles' => ['Admin']
	]);
});