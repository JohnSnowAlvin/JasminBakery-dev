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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homes', 'HomeController@userHome')->name('homes');

//Route::get('/products')

//Route::view('products','products');
Route::get('/products','ProductsController@get');

Route::resource('admin/product','ProductsController');

Route::resource('admin/user','AdminUsersController');

Route::post('/cart','CartController@add');

Route::view('/cartView','cartView');

Route::resource('user/profile','UserController');

Route::resource('user/order','OrderController');

Route::get('user/returnProduct','OrderController@return');

//Route::post('/cartEdit','CartController@cart');

Route::get('/cartEdit','CartController@cart')->name('cartEdit');

Route::get('/clearCart', function (){
    Cart::destroy();
    return redirect('cartView');
});