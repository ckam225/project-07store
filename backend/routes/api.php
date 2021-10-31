<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your Api!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'Api\UserController@login'); //parameters {email, password}
Route::post('register', 'Api\UserController@register'); //parameters { name, email, password, repeat_password}


/*=============== BACKEND ======================================== */

/* admin  */
Route::group(['middleware' => 'auth:api'], function(){
    /* current user details */
      Route::post('me', 'Api\UserController@me');
      /* users */
      Route::get('admin/users', 'Api\AdminController@getUsers');
      Route::post('admin/users', 'Api\AdminController@createUser');
      /* products */
      Route::get('admin/products', 'Api\AdminController@getProducts');
      Route::get('admin/products/{id}', 'Api\AdminController@getProducts')->where('id', '[0-9A-Za-z]+');
      Route::post('admin/products', 'Api\AdminController@createProduct');
      Route::post('admin/products/push', 'Api\AdminController@createProducts');
      Route::put('admin/products', 'Api\AdminController@updateProduct');
      Route::delete('admin/products/{id}', 'Api\AdminController@removeProducts')->where('id', '[0-9A-Za-z]+');
      Route::get('admin/products/colors', 'Api\AdminController@getProductColors');
      Route::post('admin/products/colors', 'Api\AdminController@addProductColor');
      Route::post('admin/products/colors/push', 'Api\AdminController@addProductColors');
});


/*=============== FRONTEND ======================================== */

//catalog => get all categories with associated products
Route::get('catalog', 'Api\ProductController@getCatalog');
Route::get('catalog/{id}', 'Api\ProductController@getProductByCategory')->where('id', '[0-9]+');//->where('name', '[A-Za-z]+'); ->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
// categories
Route::get('categories', 'Api\ProductController@getCategories');
// products for frontend
Route::get('product/{id}', 'Api\ProductController@getProductById')->where('id', '[0-9]+');
Route::get('product/{uid}', 'Api\ProductController@getProductByUId')->where('uid', '[0-9A-Za-z]+');



/* ============== test ================ */
Route::post('test', 'Api\AdminController@test');
