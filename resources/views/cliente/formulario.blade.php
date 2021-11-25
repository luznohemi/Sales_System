@extends('layouts.inicio')
@section('content')
    <div class="container">

        <?php 
        if(isset($_REQUEST['Descripcion'])){
            ?>
                <h2><?php echo $_REQUEST['Descripcion'];?></h2>
                </div>
                <div>
                    <label for="">ID</label>
                    <!-----------mostrar ID---------->
                    <input type="text" name="Id" value="<?php echo $_REQUEST['id'];?>" disabled>
                </div>
                <div>
                    <label for="">precio</label>
                    <input type="number" name="Precio" value="<?php echo $_REQUEST['precio'];?>" disabled>
                </div>

            </div> 
        <form action="{{ route('probar.guardar') }}" method="get" >
            @csrf
         <div>
                <!-----------enviar ID---------->
                <input type="hidden" name="ID" value="<?php echo $_REQUEST['id']?>">
                    <div>
                        <label>cantidad</label>
                        <input type="number" name="Cantidad" value="{{ old('Cantidad') }}">
                    </div>
                    <div>
                        <label>Cliente</label>
                        <input type="text" name="Cliente" value="{{ old('Cliente') }}">
                    </div>
                    <div>
                        <label>Celular</label>
                        <input type="number" name="Celular" value="{{ old('Celular') }}">
                    </div>

                    <div>
                        <label>Total</label>
                        <input type="text" name="Total" value="{{ old('Total') }}">
                    </div>
                        
                    </div>
                   
                        @csrf

                        
                    <?php
                }
                ?>
           <div>
            <a href="?"><input type="submit"  name="registrar"></a>
        </div>
        </form>

    </div>
    
    
    @endsection


    <div>
        <a href="/inicio"><input type="submit" value="cancelar"></a>
    </div>
    
    