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
        #c { width: 300px; }
    </style>
</head>
<body>
    
    <div  id ='c' class="p-3 mb-2 bg-warning text-dark " >
        <h1>EDITAR PRODUCTO</h1>
        <form action="{{ route('producto.guardar') }}" method="post" >
            @csrf
            <div>
                <label for="">descriccionE</label>
                <input type="text" name="descripcion" value="{{ old('descripcion') }}">
            </div>
            <div>
                <label for="">precio</label>
                <input type="text" name="precio" value="{{ old('precio') }}">
            </div>
            <div>
                <label for="">cantidad</label>
                <input type="text" name="cantidad" value="{{ old('cantidad') }}">
            </div>
           
            <div class="">
                <input type="submit" value="Submit" class="btn btn-dark">
            </div>
    </div>
    @endsection
</body>
</html>
  