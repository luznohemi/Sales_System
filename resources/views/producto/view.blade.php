@extends('layouts.producto')
@section('content')
    <div class="p-3 mb-2 bg-info text-white">
    <h1>VISTA DE  </h1>
        <div >
            <label for="">descripcion</label>
            <input type="text" name="descripcion" value="{{ $producto->descripcion }}" readonly>
        </div>

        <div >
            <label for="">precio</label>
            <input type="text" name="precio" value="{{ $producto->precio }}" readonly>
        </div>

        <div >
            <label for="">cantidad</label>
            <input type="text" name="cantidad" value="{{ $producto->cantidad}}" readonly>
        </div>

       
        <div>
        <a href="{{ route('producto.listar') }}"> Back</a>
            </div>
    </div>
@endsection