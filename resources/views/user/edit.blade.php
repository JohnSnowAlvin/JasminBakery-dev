@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div align="center" class="panel-heading">Edit Profile</div>

                    <div class="panel-body">
                        <div class="col-sm-9">
                            {!! Form::model($user,['method' =>'PATCH', 'action' => ['UserController@update',$user->id ]]) !!}
                            <table class="table">
                                <tr>

                                    <td>{!! Form::label('firstName','First Name') !!}</td>
                                    <td>{!! Form::text('firstName',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('lastName','Last Name') !!}</td>
                                    <td>{!! Form::text('lastName',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('email','Email') !!}</td>
                                    <td>{!! Form::text('email',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('password','Password') !!}</td>
                                    <td>{!! Form::text('password',null,['class' => 'form_control'] ) !!}<br>
                                        *You can leave this field, if you don't want to change
                                    </td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('phoneNumber','Phone Number') !!}</td>
                                    <td>{!! Form::text('phoneNumber',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('address','Address') !!}</td>
                                    <td>{!! Form::text('address',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        <a href="{{url('user/profile')}}"><input type="submit" value="Cancel"
                                                                                 class="btn btn-danger"></a>
                                    </td>
                                </tr>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection