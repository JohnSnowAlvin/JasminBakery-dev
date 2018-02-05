<?php

namespace App\Http\Controllers;

use App\Order;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function orderlist()
    {
        $orders = Order::all();
        return view('admin/orderList',compact('orders'));
    }

    public function chart()
    {
        $chart = Charts::multi('bar', 'material')
            // Setup the chart settings
            ->title("Monthly Sale Status")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Element 1', [5,20,100])
            ->dataset('Element 2', [15,30,80])
            ->dataset('Element 3', [25,10,40])
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

        return view('admin/monthlySaleStatus', ['chart' => $chart]);
    }
}
