@extends('Layouts.app')
@section('content')
<!doctype html>
<html>
<head>
<title>Document</title>
</head>
<body>
    <h3>Update Product:</h3>
<form action="/product/edit/{{$product->id}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
<label>Product Name:</label>
<input type="text" name="pname" placeholder="enter product name" value="{{$product->p_name}}"><br><br>
<label>Product Description:</label>
<textarea name="pdesc">{{$product->description}}</textarea><br><br>
<span>Product Status:<span>
<select id="status" name="status" value="{{$product->status}}">
<option value="1">Active</option>
<option value="0">InActive</option>
</select><br><br>
<label>Product Price:</label>
<input type="text" name="pprice" value="{{$product->price}}" placeholder="enter product price"><br><br>
<input type="submit" name="update" value="Update">
</form>
</body>
</html>
@endsection