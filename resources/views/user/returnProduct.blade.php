@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Order History</div>
                    @if($product)
                        {!! Form::open(['method' =>'POST', 'action' => 'OrderController@store']) !!}
                        <table class="table">
                            <tr>
                                <td>{!! Form::label('name','Product Name:') !!}</td>
                                <td>{!! Form::select('name', array(1 => 'Coconut Bread', 0=> 'Egg Cake') ,['class' => 'form_control'] ) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('name','Quantity:') !!}</td>
                                <td>{!! Form::text('name',null ,['class' => 'form_control'] ) !!}
                                    <br> *Please fill Number only
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>{!! Form::submit('Return Product', ['class' => 'btn btn-primary']) !!}</td>
                            </tr>
                        </table>
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
