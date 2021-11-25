<?php

namespace App\Http\Controllers;
use App\Models\venta;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class ventaController extends Controller
{
    
    public function listarVenta()
    {
         return view('ventas.lista');
    }

   
///registra cliente

public function verformularioVenta(){
    return view('cliente.formulario');

}

public function probar(Request $request){

  echo('hola luz como esas');
  //regristro con arreglo en forma obligatoria obligatoria

   $reglas = [
   'Cliente' => 'required',//requiere es ingreso obligatoria de datos
   'Celular' => 'required',
   'Cantidad' => 'required',
   'Total'=> 'required'
 
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

   ]);
   $this->mensaje('message','Producto creado correctamente!');
   return redirect()->back();
}

}



        
  
        
    


    
  


 
