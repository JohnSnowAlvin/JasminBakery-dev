@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div align="center" class="panel-heading">Edit Profile</div>

                    <div class="panel-body">
                        <div class="col-sm-9">
                            <table class="table">
                                <tr>

                                    <td>{!! Form::label('firstName','First Name') !!}</td>
                                    <td>{{ucfirst($user->firstName)}}</td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('lastName','Last Name') !!}</td>
                                    <td>{{ucfirst($user->lastName)}}</td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('email','Email') !!}</td>
                                    <td>{{ucfirst($user->email)}}</td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('password','Password') !!}</td>
                                    <td><input type="password" value="($user->password)"> </td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('phoneNumber','Phone Number') !!}</td>
                                    <td>{{($user->phoneNumber)}}</td>
                                </tr>
                                <tr>

                                    <td>{!! Form::label('address','Address') !!}</td>
                                    <td>{{($user->address)}}</td>
                                    {!! Form::close() !!}
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="{{ url("user/profile/$user->id/edit") }}">
                                        <input type="button" class="btn btn-primary col-sm-4" value="Edit Profile">
                                        </a>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Account Dashboard</div>--}}

{{--<table class="table">--}}
{{--<tr>--}}
{{--<td>First Name</td>--}}
{{--<td>{{ucfirst($user->firstName)}}</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>Last Name</td>--}}
{{--<td>{{ucfirst($user->lastName)}}</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>Email</td>--}}
{{--<td>{{$user->email}}</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>Password</td>--}}
{{--<td>{{$user->password}}</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>Phone No.</td>--}}
{{--<td>{{$user->phoneNumber}}</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>Address</td>--}}
{{--<td>{{$user->address}}</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td></td>--}}
{{--<td><a href="{{ url("user/profile/$user->id/edit") }}">--}}
{{--<input type="button" class="btn btn-primary col-sm-2" value="Edit Profile">--}}
{{--</a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--</table>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}