<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;

use Cart;
use Illuminate\Support\Facades\Request;


class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        /*update/ add new item to cart*/

            if (Request::isMethod('post')) {

                $product_id = Request::get('id');
                $product = Product::find($product_id);
                Cart::add(
                    [
                        'id' => $product_id,
                        'name' => $product->name,
                        'image' => $product->photo_id,
                        'qty' => 1,
                        'price' => $product->price
                    ]
                );
            }
//            return Cart::content();
             return redirect('/products');
        }
    public function cart() {


        //increment the quantity
        if (Request::get('product_id') && (Request::get('increment')) == 1) {
            $rowId = Cart::search(function ($cartItem, $rowId) {
                return $cartItem->id === Request::get('product_id');
            });
            $item = Cart::get($rowId->keys()->first());
            Cart::update($rowId->keys()->first(), $item->qty + 1);
        }

        //decrease the quantity
        if (Request::get('product_id') && (Request::get('decrease')) == 1) {
            $rowId = Cart::search(function ($cartItem, $rowId) {
                return $cartItem->id === Request::get('product_id');
            });
            $item = Cart::get($rowId->keys()->first());
            Cart::update($rowId->keys()->first(), $item->qty - 1);
        }
        //remove the item
        if(Request::get('product_id')&&(Request::get('remove_item')==1)){
            $rowId = Cart::search(function ($cartItem, $rowId) {
                return $cartItem->id === Request::get('product_id');
            });

            Cart::remove($rowId->keys()->first());
        }
        return redirect('/cartView');
    }
}