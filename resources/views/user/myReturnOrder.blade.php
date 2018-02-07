@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <ol class="breadcrumb">
                        <li><a href="/user/userOrder">Order History</a></li>
                        <li class="active">My Return Order</li>
                    </ol>

                    <table class="table">
                        @if($rOrder->count())
                            <table class="table table-condensed">
                                <thead>

                                <tr class="cart_menu">
                                    <td class="description">Product Name</td>
                                    <td class="quantity">Quantity</td>
                                    <td>Return Date</td>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $oID='';
                                @endphp
                                @foreach($rOrder as $item)
                                    <tr>
                                        <td class="cart_description">
                                            {{$item->rIName}}
                                            {{--<p><img src="{{ asset('images/'.$item->image) }}" class="img-responsive" style="width: 100px; height: 80px;"></p>--}}
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                                <P>{{$item->qty}}</P>
                                            </div>

                                        </td>
                                        <td class="cart_delete">
                                            <p>{{$item->updated_at}}</p>
                                        </td>
                                    </tr>

                                @endforeach
                                <tr>
                                    <td colspan="3"></td>
                                </tr>
                                @else
                                    <p>You have no return item</p>
                                @endif
                                </tbody>
                            </table>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
