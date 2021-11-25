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
        //echo'lux nohemi';
        $ventas = venta::toBase()->get();
        return view('layouts.ventas',compact('ventas'));
    }

   
///registra cliente

public function verformularioVenta(){
    $productos=producto::all();
    return view('cliente.formulario',compact('productos'));

}

public function probar(Request $request){
    

   // dd($request->all());
   // $ventas = venta::all(); dd($ventas);

 // echo('hola luz como esas');
  //regristro con arreglo en forma obligatoria obligatoria

 

 venta::create([
    'Cliente' =>$request->Cliente,
    'Celular' =>$request->Celular,
    'Cantidad'=>$request->Cantidad,
    'Total'=>$request->Total,
    'id_p'=>$request->ID,
]);
return redirect()->back();

 

   
}
//eliminar venta
}


        
  
        
    


    
  


 
