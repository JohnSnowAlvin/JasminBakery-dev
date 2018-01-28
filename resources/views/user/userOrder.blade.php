@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Order History</div>

                    <table class="table">
                        <tr>
                            <td>Orders</td>
                        </tr>
                        @foreach($product as $product)
                            <tr>
                                <td><img src="{{asset('images/'.$product->photo->file)}}"
                                         class="img-responsive img-rounded" style="width:200px;height:100px;"></td>
                                <td>{{$product->name}}<br>
                                    <input type="button" class="btn btn-group" value="Delivered"></td>
                                <td><br>
                                    <form method="POST" action="{{url('cart')}}">
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-primary add-to-cart">
                                            <i class="fa fa-shopping-cart"></i> ReOrder Product
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
