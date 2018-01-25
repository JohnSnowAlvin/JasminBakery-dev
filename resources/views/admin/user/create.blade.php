@extends('layouts.admin')


@section('content')
    @if(isset($product))
        <div class="col-md-20 col-sm-20 " >
            <table>

                {!! Form::open(['method' =>'POST', 'action' => 'ProductsController@store', 'files' => true ]) !!}
                {{csrf_field()}}
                <tr>
                    <div class="form-group">
                        <td>{!! Form::label('name','Product Name:') !!}</td>
                        <td>{!! Form::name('name',null,['class' => 'form_control'] ) !!}</td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>{!! Form::label('file','Product Photo:') !!}</td>
                        <td>{!! Form::file('file',null,['class' => 'form_control'] ) !!}</td>
                    </div>
                </tr>
                <div class="form-group">
                    {!! Form::label('category','Category:') !!}
                    {!! Form::text('category',[''=> 'Choose Options'] , null ,['class' => 'form_control'] ) !!}
                </div>
                <tr>
                    <div class="form-group">
                        <td>{!! Form::label('price','Price:') !!}</td>
                        <td>{!! Form::text('price',null,['class' => 'form_control'] ) !!}</td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>{!! Form::label('description','Description:') !!}</td>
                        <td> {!! Form::text('description',null,['class' => 'form_control'] ) !!}</td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>{!! Form::label('tag','Tag:') !!}</td>
                        <td>{!! Form::text('tag',null,['class' => 'form_control'] ) !!}</td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>{!! Form::label('rating','Rating:') !!}</td>
                        <td>{!! Form::select('rating',array([0 => '1', 1 => '2',2 => '3', 3 => '4',4 => '5']), 0 ,['class' => 'form_control']) !!}</td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td>{!! Form::label('status','Status:') !!}</td>
                        <td>{!! Form::text('status',null,['class' => 'form_control'] ) !!}</td>
                    </div>
                </tr>
                <tr>
                    <div class="form-group">
                        <td></td>
                        <td>{!! Form::submit('Create Product', ['class' => 'btn btn-primary']) !!}</td>
                    </div>
                </tr>
                {!! Form::close() !!}
            </table>
        </div>
    @endif
@endsection