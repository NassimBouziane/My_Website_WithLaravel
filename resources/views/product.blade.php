<!DOCTYPE html>
@include('partials.header')
@php
    $response = Http::get('https://cataas.com/api/cats?tags=cute')->collect() ;
@endphp
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Product</title>
</head>
<body> 
@foreach ($response as $item)
<p>  {{$item['_id']}} </p>

@endforeach
    
</body>
</html>