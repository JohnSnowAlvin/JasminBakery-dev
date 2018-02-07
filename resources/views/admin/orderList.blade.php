@extends('layouts.admin')

@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="active">Order List</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                @if($orders->count())
                    {!! Form::open(['method' =>'POST', 'action' => ['HomeController@printTable',$order->id]]) !!}
                    {!! Form::submit('Print', ['class' => 'btn btn-primary']) !!}
                    <table class="table table-condensed">
                        <thead>

                        <tr class="cart_menu">
                            <td class="user">User ID</td>
                            <td class="image">Order ID</td>
                            <td class="description">Item</td>
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
                                <td class="user">{{ucfirst($item->userID)}}</td>
                                <td class="cart_product">
                                    @if( $item->orderID  != $oID  )
                                        {{ $item->orderID }}
                                        @php $oID=$item->orderID @endphp
                                    @endif
                                </td>
                                <td class="cart_description">
                                    {{$item->itemName}}
                                    {{--<img src="{{ asset('images/'.$item->image) }}" class="img-responsive" style="width: 100px; height: 80px;">--}}
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
                            <p>You haven't order yet</p>
                        @endif
                        </tbody>
                        {!! Form::close() !!}
                    </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

@endsection
