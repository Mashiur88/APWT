@extends('Layouts.admin')
@section('navbar')
@if(Session()->has('id'))
<a href="/admin/profile/{{session()->get('id')}}">View Profile</a>
<a href="/admin/edit/{{session()->get('id')}}">Update profile</a>
@endif
@parent
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
    <h5>Welcome to Admin Dashboard</h5><br>
</body>
</html>
@endsection