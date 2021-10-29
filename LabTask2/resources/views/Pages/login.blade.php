@extends('Layouts.app')
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
    <form action="{{route('Pages.login')}}" method="post">
    {{csrf_field()}}
    <h3>Login</h3>
    <input type="text" id='user' name="user" placeholder= 'Enter username'><br>
    @if($errors->has('user'))
    <span>{{ $errors->first('user') }}</span><br>
    @endif
    <input type="password" id='passWord' name="passWord" placeholder= 'Type passWord'><br>
    @if($errors->has('passWord'))
    <span>{{ $errors->first('passWord') }}</span><br>
    @endif
    <input type="submit" name="submit">
    </form>
</body>
</html>
@endsection