<?php

namespace App\Http\Controllers;
use App\Models\producto;
use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class clienteController extends Controller
{
    function clienteinicio(){
        return view('layouts.cliente');
   }



   //listar Cliente
   public function listarCliente()
   {
        $clientes = Cliente::toBase()->get();
        return view('cliente.inicioc',compact('clientes'));
   }


   public function crearCliente()
   {
      return view('cliente.formulario');
   }


///registra cliente
   public function registrarVenta(Request $request)
   {
        //regristro con arreglo en forma obligatoria obligatoria

   $reglas = [
   'Cliente' => 'Cliente',//requiere es ingreso obligatoria de datos
   'Celular' => 'Celular',
   'Cantidad' => 'Cantidad',
   'Total'=> 'Total',
   'id_p'=> 'id'
   ];
   $mensajeDeError = [
   'required' => 'Ingreso de datos erróneo'
   ];
   $this->validate($request, $reglas, $mensajeDeError);
   Producto::create([
   'Cliente' => $request->Cliente,
   'Celular' => strtolower($request->Celular),
   'Cantidad' => strtolower($request->Cantidad),
   'Total' => strtolower($request->Total),
   'id_p' => strtolower($request->id)
   ]);
   $this->mensaje('message','Producto creado correctamente!');
   return redirect()->back();
   }
   
}


