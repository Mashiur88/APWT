<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @section('navbar')
    <a class="btn-btn-primary" href="{{ route('home') }}">Home</a>
    <a class="btn-btn-primary" href="{{ route('product.add') }}">Add Product</a>
    <a class="btn-btn-primary" href="{{ route('product.list') }}">Product List</a>
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>