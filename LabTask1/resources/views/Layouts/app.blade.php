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
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('service') }}">Service</a>
    <a href="{{ route('teams') }}">Our team</a>
    <a href="{{ route('about') }}">About us</a>
    <a href="{{ route('contact') }}">Contact us</a>
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>