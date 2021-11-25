@extends('layouts.producto')
@section('content')
<div class="p-3 mb-2 bg-primary text-white">

<h1>EDITAR PROGRAMADOR</h1>
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