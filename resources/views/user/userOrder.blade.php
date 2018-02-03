@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <ol class="breadcrumb">
                        <li class="active">Order History</li>
                        <li><a href="/user/myReturnOrder">My Return Order</a></li>
                    </ol>

                    <table class="table">
                        @if($orders->count())
                            <table class="table table-condensed">
                                <thead>

                                <tr class="cart_menu">
                                    <td class="image">Order ID</td>
                                    <td class="description">Product Name</td>
                                    <td class="price">Price</td>
                                    <td class="quantity">Quantity</td>
                                    <td class="total">Sub Total</td>
                                    <td>Date</td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $oID='';
                                @endphp
                                @foreach($orders as $item)
                                    <tr>
                                        <td class="cart_product">
                                            @if( $item->orderID  != $oID  )
                                                <br>{{ $item->orderID }}
                                                @php $oID=$item->orderID @endphp
                                            @endif
                                        </td>
                                        <td class="cart_description">
                                            <h4>{{$item->itemName}}</h4>
                                            {{--<p><img src="{{ asset('images/'.$item->image) }}" class="img-responsive" style="width: 100px; height: 80px;"></p>--}}
                                        </td>
                                        <td class="cart_price">
                                            <p>${{$item->price}}</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <P>{{$item->qty}}</P>
                                            </div>

                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price">${{$item->subtotal}}</p>
                                        </td>
                                        <td class="cart_delete">
                                            <p>{{$item->updated_at}}</p>
                                        </td>
                                        {{--<td>--}}
                                            {{--<form method="GET" action="{{url('orderHistory/'.$item->cartRowID.'/edit')}}">--}}
                                                {{--<input type="hidden" name="id" value="{{$item->cartRowID}}">--}}
                                                {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                                {{--<button type="submit" class="btn btn-danger">--}}
                                                    {{--Return--}}
                                                {{--</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}
                                    </tr>

                                @endforeach
                                {{--<tr>
                                    <td colspan="2"></td>
                                    <td>Total</td>
                                    <td colspan="2">${{$total}}</td>
                                </tr>--}}
                                <tr>
                                    <td colspan="3"></td>
                                </tr>

                                @else
                                    <p>You have no items in the shopping cart</p>
                                @endif
                                </tbody>
                            </table>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
