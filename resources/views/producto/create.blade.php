@extends('layouts.producto')
@section('content')
<div class="p-3 mb-2 bg-success text-dark">CREAR NUEVO PROGRAMADOR  </div>
    <div class="p-3 mb-2 bg-warning text-dark">
  
        <form action="{{ route('producto.guardar') }}" name="Form" method="post" >
            @csrf
            <div class="form-group">
                <label for="Form">Descripcion</label>
                <input type="text" name="descripcion" value="{{ old('descripcion') }}">
            </div>
            <div class="form-group">
                <label for="Form">Precio</label>
                <input type="text" name="precio" value="{{ old('precio') }}">
            </div>
            <div class="form-group">
                <label for="Form">Cantidad</label>
                <input type="text" name="cantidad" value="{{ old('cantidad') }}">
            </div>
           
            <div class="form-group">
                <input type="submit" value="Crear" class="btn btn-dark">
            </div>
        </form>
    </div>
    @endsection