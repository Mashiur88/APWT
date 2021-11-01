@extends('Layouts.app')
@section('content')
<!doctype html>
<html>
<head>
<title>Document</title>
<h3>Add product</h3>
</head>
<body>
<form action="{{route('product.sub')}}" method="post" enctype="multipart/form-data">
 {{csrf_field()}}
<label>Product Name:</label>
<input type="text" name="pname" placeholder="enter product name"><br><br>
@if($errors->has('pname'))
<span>{{ $errors->first('pname') }}</span><br>
@endif
<label>Product Description:</label>
<textarea name="pdesc"></textarea><br><br>
@if($errors->has('pdesc'))
<span>{{ $errors->first('pdesc') }}</span><br>
@endif
<span>Product Status:<span>
<select id="status" name="status">
<option value="1">Active</option>
<option value="0">InActive</option>
</select><br><br>
@if($errors->has('status'))
<span>{{ $errors->first('status') }}</span><br>
@endif
<label>Product Price:</label>
<input type="text" name="pprice" placeholder="enter product price"><br><br>
@if($errors->has('pprice'))
<span>{{ $errors->first('pprice') }}</span><br>
@endif
<label>Product Image:</label>
<input type="file" name="pimage"><br><br>
@if($errors->has('pimage'))
<span>{{ $errors->first('pimage') }}</span><br>
@endif
<input type="submit" name="submit">
</form>
</body>
</html>
@endsection