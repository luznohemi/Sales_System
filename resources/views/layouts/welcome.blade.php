<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
       
        <style>
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #FF7905;
            /*border: 1px solid #0000cc;*/
            }
            li {
            float: right;
            }
            #imagen{
                width: 100%;
                height: 100%;
                float: left;
            }
            li a {
            display: block;
            color: #cccccc;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            height: 70px;
            font-size: x-large;
            }

            li a:hover:not(.active) {
            background-color: #D9600B;
            }

            li a.active {
            color: black;
            background-color: #E0DA2D;
            }
            .imagen{
                float: left;
            }
            </style>
         <div class="container-fluid">
        
        <ul>
        <li><a href="">Registrate</a></li>
        <li><a href="">Iniciar Sesion</a></li>
        <li><a href="">Habitaciones</a></li>
        <li><a href="">Nosotros</a></li>
        <li><a href="">Reservas</a></li>
        <li><a class="active" href='PaginaPrincipal.PagPrincipal'>Inicio</a></li>
        <!--Para que el logo llegue a la izquierda -->
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <li><a></a></li>
        <!--Para que el logo llegue a la izquierda -->
        <li><a><img id="imagen" src="Hotel Los Linces.png"></a></li>
        </ul>
    </div>
    </head>
    <body>
    
        <div>
                @yield('content')
        </div>
    </body>
</html>
