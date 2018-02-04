@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Return Expired Product</div>
                        {!! Form::open(['method' =>'POST', 'action' => 'OrderController@store']) !!}
                        <table class="table">
                            <tr>
                                <td>{!! Form::label('rIName','Product Name:') !!}</td>
                                <td>{!! Form::select('rIName', ['' => 'Choose Product Name']+ $pname,null ,['class' => 'form_control'] ) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('qty','Quantity:') !!}</td>
                                <td>{!! Form::text('qty',null ,['class' => 'form_control'] ) !!}
                                    <br> *Please fill Number only
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>{!! Form::submit('Return Product', ['class' => 'btn btn-primary']) !!}</td>
                            </tr>
                        </table>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
