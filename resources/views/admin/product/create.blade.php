@extends('layouts.admin')


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
                                <td>{!! Form::text('name',null,['class' => 'form_control'] ) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('price','Product Price') !!}</td>
                                <td>{!! Form::text('price',null,['class' => 'form_control'] ) !!}</td>
                            </tr><tr>
                                <td>{!! Form::label('category','Product Category') !!}</td>
                                <td>{!! Form::select('category',array([0 => 'Cake',1 => 'Bread',2 => 'Cookies']), 0 ,['class' => 'form_control'] ) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('description','Product Description') !!}</td>
                                <td>{!! Form::text('description',null,['class' => 'form_control'] ) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('tag','Product Tag') !!}</td>
                                <td>{!! Form::text('tag',null,['class' => 'form_control'] ) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('rating','Product Rating') !!}</td>
                                <td>{!! Form::select('rating',array([1 => '1',2 => '2',3 => '3',4 => '4',5 => '5',]), 0 ,['class' => 'form_control'] ) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('status','Product Status') !!}</td>
                                <td>{!! Form::text('status',null,['class' => 'form_control'] ) !!}</td>
                            </tr>
                            <tr>
                                <td>{!! Form::label('photo_id','Product Image') !!}</td>
                                <td>{!! Form::file('photo_id',null,['class' => 'form_control'] ) !!}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>{!! Form::submit('Create Product', ['class' => 'btn btn-primary']) !!}</td>
                            </tr>
                            {!! Form::close() !!}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection