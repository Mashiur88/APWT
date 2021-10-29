@extends('Layouts.emp')
@section('navbar')
@parent
@if(Session()->has('id'))
<a href="/employee/profile/{{session()->get('id')}}">View Profile</a>
<a href="/employee/edit/{{session()->get('id')}}">Update profile</a>
<a href="{{route('employee.list')}}">Employee List</a>
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
    <h3>Hello</h3>
    <h5>{{ session()->get('id') }}</h5>
    <h5>Welcome to Employee Dashboard</h5><br>
</body>
</html>
@endsection