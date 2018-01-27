@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-primary" align="center">
                <div class="panel-heading ">Order Confirmed!!</div>
                <div class="panel-body">

                    <table>
                        <tr>
                            <b>Your Order Details</b></br>
                        </tr>
                        <tr>
                            <td>Buyer Name:</td>
                            <td>{{ucfirst($user->firstName)}}</td>
                        </tr>
                        <tr>
                            <td> Shipping Address:</td>
                            <td>{{$user->address}}</td>
                        </tr>
                        <tr>
                            <td>Phone No:</td>
                            <td>+{{$user->phoneNumber}}</td>
                        </tr>
                    </table>
                    <br>

                    <table>
                        <tr>
                            <th>Product Name</th>
                            <td align="center"><b>Quantity</b></td>
                            <th>Price</th>
                        </tr>
                        <tr>
                            @foreach(Cart::content() as $product)
                                <td>{{$product->name}}</td>
                                <td align="center">{{$product->qty}}</td>
                                <td>{{$product->price}}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td>Total (inc Vat %)</td>
                            <td>{{Cart::total()}}</td>
                        </tr>
                    </table>
                    <br>
                    <table>
                        <tr>
                            <td>Your Product Will Be Delivered Within 2 working days</td>
                        </tr>
                        <tr>
                            <td align="center">Cash On Delivery</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection