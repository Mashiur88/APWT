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
        <form action="{{route('Pages.contact')}}" method='post'>
            {{csrf_field()}}
            <h3>Contact Info:</h3><br>
            <label for="address">Address:</label>
            <textarea name="address" id="address" cols="15" rows="1"></textarea><br>
            @if($errors->has('address'))
            <span>{{ $errors->first('address') }}</span><br>
            @endif
            <label for="fb">Facebook Address:</label>
            <input type="url" id="fb" name="fb"><br>
            @if($errors->has('fb'))
            <span>{{ $errors->first('fb') }}</span><br>
            @endif
            <label for="fb">linkdln url:</label>
            <input type="url" id="linkdln" name="linkdln"><br>
            @if($errors->has('linkdln'))
            <span>{{ $errors->first('linkdln') }}</span><br>
            @endif
            <input type="submit" name="submit">
        </form>
    </body>
    </html>
    

@endsection