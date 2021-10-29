@extends('Layouts.emp')
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
<form action="{{route('employee.edit')}}" method='post'>
    {{csrf_field()}}
    <h3>Update Profile</h3>
<input type="text" id='id' name='id' value="{{$employee->id}}"><br>
<input type="text" id='user' name="user" value="{{$employee->username}}"><br>
@if($errors->has('user'))
<span>{{ $errors->first('user') }}</span><br>
@endif
<input type="password" id='passWord' name="passWord" value="{{$employee->password}}"><br>
@if($errors->has('passWord'))
<span>{{ $errors->first('passWord') }}</span><br>
@endif
<input type="text" id='phone' name="phone" value="{{$employee->phoneno}}"><br>
@if($errors->has('phone'))
<span>{{ $errors->first('phone') }}</span><br>
@endif
<input type="date" id='dob' name="dob" value="{{$employee->bday}}"><br>
@if($errors->has('dob'))
<span>{{ $errors->first('dob') }}</span><br>
@endif
<input type="text" id='email' name="email" value="{{$employee->email}}"><br>
@if($errors->has('email'))
<span>{{ $errors->first('email') }}</span><br>
@endif
<span>Gender :</span><br>
<input type="radio" name="gender" id='male' value="male">Male <input type="radio" name="gender" id='female' value="female">Female <input type="radio" name="gender" id="other" value="other">Other<br>
@if($employee->gender=="male")
<script>document.getElementById('male').checked=true;</script>
@elseif($employee->gender=="female")
<script>document.getElementById('female').checked=true;</script>
@elseif($employee->gender=="other")
<script>document.getElementById('other').checked=true;</script>
@endif
@if($errors->has('gender'))
<span>{{ $errors->first('gender') }}</span><br>
@endif
<input type='submit' name="submit" value="update">
</form>
</body>
</html>
@endsection