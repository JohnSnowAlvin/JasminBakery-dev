@extends('layouts.admin')


@section('content')

    <table class="table">
        <tr>
            <th>User ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone No.</th>
            <th>Address</th>

        </tr>
        @if($user)
            @foreach($user as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{ucfirst($user->firstName)}}</td>
                    <td>{{ucfirst($user->lastName)}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phoneNumber}}</td>
                    <td>{{$user->address}}</td>
                    <td>{!! Form::open(['method' =>'DELETE', 'action' => ['AdminUsersController@destroy',$user->id]]) !!}
                    {{csrf_field()}}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}</td>

                    {!! Form::close() !!}
                </tr>
            @endforeach
        @endif
    </table>

@endsection