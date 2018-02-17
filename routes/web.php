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

use App\Product;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

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
        $products = Product::all();
        $product = DB::table('products')->pluck('category')->all();
        return view('products',compact('product','products'));
    })->name('home');
    Route::get('/adminHome',function (){
        $orders = DB::table('orders')
            ->join('products','products.id','=','orders.orderID')
            ->join('photos','products.photo_id','=','photos.id')
            ->join('users','users.id','=','orders.orderID')
//            ->select('orders.*', 'users.id')
//            ->join('users','orders.userID','=','orders.orderID')
            ->get();
        return view('admin/orderList',compact('orders'));
    })->name('adminHome');
});

Route::resource('admin/product','ProductsController');

Route::resource('admin/user','AdminUsersController');

Route::resource('user/profile','UserController');

Route::resource('user/order','OrderController');

Route::get('admin/monthlySaleStatus','HomeController@chart');

Route::get('admin/orderList','HomeController@orderlist');

Route::get('admin/preOrderList','HomeController@preOrderList');

Route::get('admin/returnOrderList','HomeController@returnOrderList');

Route::get('admin/userFeedback','ContactUsController@userFeedback');

Route::get('user/returnOrder','OrderController@rOrder');

Route::get('user/preOrderHistory','PreOrderController@preHistory');

Route::get('user/preOrder','OrderController@preOrder');

Route::get('user/returnProduct','OrderController@return');

Route::get('iframes/iframe','OrderController@print');

Route::get('user/feedBack','ContactUsController@feedBack');

Route::resource('user/ticket','ContactUsController');

Route::resource('user/preOrder','PreOrderController');



