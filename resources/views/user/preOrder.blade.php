@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Product</div>

                    <div class="panel-body">
                        {!! Form::open(['method' =>'POST', 'action' => 'ProductsController@store','files' => true]) !!}
                        <table>
                            <tr>
                                <td>{!! Form::label('name','Product Name') !!}</td>
                                <td>{!! Form::select('name', ['' => 'Choose Product Name']+ $pname,null ,['class' => 'form_control'] ) !!}</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>{!! Form::submit('Order Product', ['class' => 'btn btn-primary']) !!}</td>
                            </tr>
                            {!! Form::close() !!}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection