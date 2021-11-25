@extends('layouts.cliente')
@section('content')
<div class="container">

<h1>EDITAR PROGRAMADOR</h1>
<form action="{{ route('cliente.actualizar', $cliente->slug) }}" method="post">
@csrf
@method('patch')
    <div class="form-group">
        <label for="">nombres</label>
        <input type="text" name="nombres" value="{{ $cliente->nombres }}">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" value="{{ $cliente->email}}">
    </div>

    <div class="form-group">
        <label for="">telefono</label>
        <input type="numeric" name="telefono" value="{{ $cliente->telefono}}">
    </div>

    <div class="form-group">
        <label for="">Direccion</label>
        <input type="text" name="direccion" value="{{ $cliente->direccion}}">
    </div>
    

    <div class="form-group" style="margin-top: 24px;">
        <input type="submit" value="Update">
    </div>
</div>
</div>
@endsection