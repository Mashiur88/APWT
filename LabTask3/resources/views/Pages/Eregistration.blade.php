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
<form action="{{route('Pages.Eregistration')}}" method='post'>
    {{csrf_field()}}
    <h3>Registration</h3>
<input type="text" id='user' name="user" placeholder= 'Enter username'><br>
@if($errors->has('user'))
<span>{{ $errors->first('user') }}</span><br>
@endif
<input type="password" id='passWord' name="passWord" placeholder= 'Enter Password'><br>
@if($errors->has('passWord'))
<span>{{ $errors->first('passWord') }}</span><br>
@endif
<input type="text" id='phone' name="phone" placeholder= 'Enter Phonenumber'><br>
@if($errors->has('phone'))
<span>{{ $errors->first('phone') }}</span><br>
@endif
<input type="date" id='dob' name="dob" placeholder= 'Enter Birthday'><br>
@if($errors->has('dob'))
<span>{{ $errors->first('dob') }}</span><br>
@endif
<input type="text" id='email' name="email" placeholder= 'Enter email'><br>
@if($errors->has('email'))
<span>{{ $errors->first('email') }}</span><br>
@endif
<span>Gender :</span><br>
<input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female <input type="radio" name="gender" value="other">Other<br>
@if($errors->has('gender'))
<span>{{ $errors->first('gender') }}</span><br>
@endif
<input type='submit' name="submit">
</form>
</body>
</html>
    

@endsection