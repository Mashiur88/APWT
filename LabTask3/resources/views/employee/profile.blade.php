@extends('Layouts.emp')
@section('navbar')
@parent
@if(Session()->has('id'))
<a href="/employee/profile/{{session()->get('id')}}">View Profile</a>
<a href="/employee/edit/{{session()->get('id')}}">Update profile</a>
<a href="{{route('logout')}}">Logout</a>
@endif
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Employee Profile</h3>
<p>Employee ID: {{$employee->id}}</p><br>
<p>Employee Username: {{$employee->username}}</p><br>
<p>Phone Number: {{$employee->phoneno}}</p><br>
<p>Birth Date: {{$employee->bday}}</p><br>
<p>Email ID: {{$employee->email}}</p><br>
<p>Gender: {{$employee->gender}}</p><br>
</body>
</html>
@endsection