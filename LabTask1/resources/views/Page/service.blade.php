@extends('Layouts.app')
@section('navbar')
@parent
@endsection
@section('content')
{{--  
{{ $name }}
{{ $view }}   
--}} 
@foreach($data as $item)
{{ $item }}
<?php echo "<br>";
?>
@endforeach
@endsection