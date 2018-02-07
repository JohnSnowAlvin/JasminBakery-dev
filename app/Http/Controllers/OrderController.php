<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\ReturnOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $product = Product::all();
        $orders = Order::all()
            ->where('returnOrder',0);
        return view('user/userOrder',compact('user','product','orders'));
    }

    public function return()
    {
        $user = Auth::user();
        $pname = Product::pluck('name','id')->all();
        return view('user/returnProduct',compact('user','pname'));
    }

    public function myreturn(Request $request)
    {
        $rOrder = ReturnOrder::all();

        return view('user/myReturnOrder',compact('rOrder'));
    }

    public function get()
    {
        $user = Auth::user();
        $product = Product::all();
        $orders = Order::all()
            ->where('returnOrder',0);
        return view('user/userOrder',compact('user','product','orders'));
    }

    public function preOrder()
    {
        $user = Auth::user();
        $product = Product::all();
        $orders = Order::all()
            ->where('returnOrder',0);
        return view('user/userOrder',compact('user','product','orders'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $pname = Product::lists('name','id')->all();
//        return view('user/returnProduct',compact('pname'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

//        if($file = $request->get('product_id')) {
//            $photo = ReturnOrder::create(['rIName'=>$file]);
//            $input['product_id'] = $photo->id;
//        }

        ReturnOrder::create($input);
        return redirect('user/myReturnOrder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::all()
                    ->where('userID',$id)
                    ->where('returnOrder',0);
        //return $orders;
        return view('orderHistory')->with('orders',$orders);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        DB::table('orders')
            ->where('cartRowID', $id)
            ->update(['returnOrder' => 1]);

        return redirect('orderHistory/'.Auth::id());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
