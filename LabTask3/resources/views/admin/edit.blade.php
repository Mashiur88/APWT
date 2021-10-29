@extends('Layouts.admin')
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
<form action="{{route('admin.edit')}}" method='post'>
    {{csrf_field()}}
    <h3>Registration</h3>
<input type="text" id='id' name='id' value="{{$admin->id}}"><br>
<input type="text" id='user' name="user" value="{{$admin->username}}" placeholder= 'Enter username'><br>
@if($errors->has('user'))
<span>{{ $errors->first('user') }}</span><br>
@endif
<input type="password" id='passWord' name="passWord" value="{{$admin->password}}" placeholder= 'Enter Password'><br>
@if($errors->has('passWord'))
<span>{{ $errors->first('passWord') }}</span><br>
@endif
<input type="text" id='email' name="email" value="{{$admin->email}}" placeholder= 'Enter email'><br>
@if($errors->has('email'))
<span>{{ $errors->first('email') }}</span><br>
@endif
<input type="date" id='dob' name="dob" value="{{$admin->bday}}" placeholder= 'Enter Birthday'><br>
@if($errors->has('dob'))
<span>{{ $errors->first('dob') }}</span><br>
@endif
<input type='submit' name="submit" value="update">
</form>
</body>
</html>
    

@endsection