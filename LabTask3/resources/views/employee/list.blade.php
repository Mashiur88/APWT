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
<table class="table table-borded">
    <th>id</th>
    <th>username</th>
    <th>phoneno</th>
    <th>email</th>
    <th>BirthDay</th>
    <th>gender</th>
    @foreach($employee as $emp)
    <tr>
    <td>{{$emp->id}}</td>
    <td>{{$emp->username}}</td>
    <td>{{$emp->phoneno}}</td>
    <td>{{$emp->email}}</td>
    <td>{{$emp->bday}}</td>
    <td>{{$emp->gender}}</td>
    <td><a href="/employee/edit/{{$emp->id}}">edit</a></td>
    <td><a href="/employee/delete/{{$emp->id}}">delete</a></td>    
    </tr>
    @endforeach
</table>
</body>
</html>
@endsection