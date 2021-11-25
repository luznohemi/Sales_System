@extends('layouts.cliente')
@section('content')
    <div class="container">
    <h1>VISTA DE  </h1>
        <div >
            <label for="">cliente</label>
            <input type="text" name="cliente" value="{{ $cliente->cliente }}" readonly>
        </div>

        <div >
            <label for="">email</label>
            <input type="text" name="email" value="{{ $cliente->email }}" readonly>
        </div>

        <div >
            <label for="">telefono</label>
            <input type="text" name="telefono" value="{{ $cliente->telefono}}" readonly>
        </div>

        <div >
            <label for="">Direccion</label>
            <input type="text" name="tdireccion" value="{{ $cliente->direccion}}" readonly>
        </div> 

        <div>
        <a href=""> Back</a>
            </div>
    </div>
@endsection