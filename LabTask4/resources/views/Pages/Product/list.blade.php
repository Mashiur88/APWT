@extends('Layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-borded">
        <th>product_id</th>
        <th>product name</th>
        <th>description</th>
        <th>status</th>
        <th>price</th>
        <th></th>
        <th></th>
        @foreach($product as $pro)
        <tr>
        <td>{{$pro->id}}</td>
        <td>{{$pro->p_name}}</td>
        <td>{{$pro->description}}</td>
        <td>{{$pro->status}}</td>
        <td>{{$pro->price}}</td>
        <td><a href="/product/edit/{{$pro->id}}">edit</a></td>
        <td><a href="/product/delete/{{$pro->id}}">delete</a></td>    
        </tr>
        @endforeach
    </table>
</body>
</html>
@endsection
