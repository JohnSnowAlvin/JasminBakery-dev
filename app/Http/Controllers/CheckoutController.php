<?php

namespace App\Http\Controllers;

use App\Order;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request){

        $id = Auth::id();
        $items=Cart::content();
        $total=0;
        //return Order::all();
        if(count(Order::all())) {
            $orderID = Order::orderBy('orderID', 'desc')->first()->orderID +1;

        }else{
            $orderID = 1;
        }
        //return $orderID;
        foreach ($items as $item){
            //return $item->rowId;
            $input = $request->all();
            if($file = $request->file('photo_id')) {
                $name = time() . $file->getClientOriginalName();
                $photo = Photo::get(['file' => $name]);
                $input['photo_id'] = $photo->id;
            }
            $total += $item->subtotal;
            Order::create([
                'orderID'=>$orderID,
                'userID' => $id,
                'photo_id' => $input,
                'cartRowID' => $item->rowId,
                'itemID' => $item->id,
                'itemName' => $item->name,
                'qty' => $item->qty,
                'price' => $item->price,
                'subtotal' => $item->subtotal,
                'returnOrder'=>0,
            ]);
        }
        Cart::destroy();

        return view('order')->with('items',$items)->with('total',$total);

    }
}
