@extends('Layouts.app')
@section('content')
<!doctype html>
<html>
<head>
<title>Document</title>
<h3>Add product</h3>
</head>
<body>
<form action="" method="post">
<label>Product Name:</label>
<input type="text" name="pname" placeholder="enter product name"><br><br>
<label>Product Description:</label>
<textarea name="pdesc"></textarea><br><br>
<span>Product Status:<span>
<select id="status" name="status">
<option value="1">Active</option>
<option value="0">InActive</option>
</select><br><br>
<label>Product Price:</label>
<input type="text" name="pprice" placeholder="enter product price"><br><br>
<label>Product Image:</label>
<input type="file" name="pimage"><br><br>
<br>
<input type="submit" name="update" value="Update">
</form>
</body>
</html>
@endsection