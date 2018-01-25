@extends('layouts.admin')


@section('content')

    <table class="table">
        <tr>
            <th>User ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Password</th>
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
                    <td>{{$user->password}}</td>
                    <td>{{$user->phoneNumber}}</td>
                    <td>{{$user->address}}</td>
                </tr>
            @endforeach
        @endif
    </table>

@endsection