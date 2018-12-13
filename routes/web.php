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
Route::get('/admin',[
	'uses' => 'AppController@getAdminPage',
	'as' => 'admin'
]);
Route::post('/admin/assign-roles',[
	'uses' => 'AppController@postAdminAssignRoles',
	'as' => 'admin.assign'
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
Route::get('/add-to-cart/{id}',[
	'uses' => 'ProductController@getAddToCart',
	'as' => 'product.addToCart'
]);
Route::get('/shopping-cart',[
	'uses' => 'ProductController@shoppingCart',
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