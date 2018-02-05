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

Route::get('/products','ProductsController@get');

Route::post('/cart','CartController@add');

Route::view('/cartView','cartView');

Route::get('/cartEdit','CartController@cart')->name('cartEdit');

Route::get('/clearCart', function (){
    Cart::destroy();
    return redirect('cartView');
});

Route::get('/checkout','CartController@checkout');

Route::resource('/orderHistory','OrderController');

Route::post('login','Auth\LoginController@login');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home',function (){
        return view('home');
    })->name('home');
    Route::get('/adminHome',function (){
        return view('adminHome');
    })->name('adminHome');
});

Route::resource('admin/product','ProductsController');

Route::resource('admin/user','AdminUsersController');

Route::resource('user/profile','UserController');

Route::resource('user/order','OrderController');

Route::get('user/returnProduct','OrderController@return');

Route::get('admin/monthlySaleStatus','HomeController@chart');

Route::get('admin/orderList','HomeController@orderlist');

Route::get('user/myReturnOrder','OrderController@myreturn');

Route::get('user/userOrder','OrderController@get');

