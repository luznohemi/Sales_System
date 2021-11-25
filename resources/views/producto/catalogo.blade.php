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

    <style>
        #c { width: 200px;
            background-color:blue;
         }
         
   </style>
</head>
<body>

    <H4 class="text-center"> PRODUCTOS </H4>

    <div id="c"  class="container  heing" >

    @forelse ($productos as $producto)
    
            <div class="row vh-30   justify-content-around align-items-center  text-center   bg-secondary text-white  ">

            <h2>{{ $producto->descripcion }}</h2>
            <h2>S/.{{ $producto->precio }}</h2>
            <h2>Stock:{{ $producto->cantidad }}</h2>
            <button ><a href="/formulario?Descripcion={{ $producto->descripcion }}&precio={{ $producto->precio }}&id={{ $producto->id }}">Vender</a></button>
       
        @empty
    @endforelse
            </div>

</div>

@endsection
<body>

