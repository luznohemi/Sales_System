@extends('layouts.producto')
@section('content')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Ventas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
</head>



<div class="container"> 
    <form action="{{ route('producto.agregar') }}" method="get">
        
    </form>
    <a href="{{ route('producto.agregar') }}"  class="btn btn-dark">NUEVO</a>

        <table class = "table table-responsive table-hover">
            <tr  class="bg-primary text-white">
                <th>Nro </th>
                <th>Descripcion </th>
                <th>Precio </th>
                <th>Cantidad</th>
       
            </tr>
<tbody>
    @forelse ($productos as $producto)
    <tr  class="table-warning" >
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $producto->descripcion }}</td>
        <td>{{ $producto->precio }}</td>
        <td>{{ $producto->cantidad }}</td>
       
        <td>
        <a  class="btn btn-dark" href="{{ route('producto.editar', $producto->slug) }}">Editar</a>
        <a class="btn btn-dark" href="{{ route('producto.ver', $producto->slug) }}">Ver</a>
        <a  class="btn btn-dark" href="" onclick="if(confirm('¿Eliminar {{ $producto->descripcion }} ?'))event.preventDefault();
        document.getElementById('borrar-{{ $producto->slug }}').submit();">Eliminar</a>
        <form id="borrar-{{ $producto->slug }}" method="post"
        action="{{ route('producto.eliminar', $producto->slug) }}">
        @csrf

        @method('DELETE')

        </td>
    </tr>
        @empty
        <p> No hay productos!</p>
        @endforelse
    </tbody>
</table>


</div>
@endsection
