@extends('layouts.producto')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
         #c { width: 500px;  text-align:center}
         
    </style>
</head>
<body>
    <div id="c" class="p-3 mb-2 bg-info text-dark">

        <h1>EDITAR PRODUCTO</h1>
        <form action="{{ route('producto.actualizar', $producto->slug) }}" method="post">
        @csrf
        @method('patch')
            <div class="form-group">
                <label for="">descripcion</label>
                <input type="text" name="descripcion" value="{{ $producto->descripcion }}">
            </div>
        
            <div class="form-group">
                <label for="">precio</label>
                <input type="text" name="precio" value="{{ $producto->precio}}">
            </div>
        
            <div class="form-group">
                <label for="">cantidad</label>
                <input type="text" name="cantidad" value="{{ $producto->cantidad }}">
            </div>
        
            
        
            <div class="form-group" style="margin-top: 24px;">
                <input type="submit" value="Update">
            </div>
        </div>
        </div>
        @endsection
</body>
</html>
