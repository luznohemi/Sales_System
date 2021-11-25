<?php

namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\str;
class productoController extends Controller
{
    
    //FUNCIO DE IR A INICIO
    function inicio(){
        return view('layouts.inicio');
    }
 
   
    //FUNCIO DE VENTA
    function ventainicio(){
        return view('layouts.ventas');
    }

     //FUNCIO DE producto
   function productoinicio(){
      return view('layouts.producto');
 }

   // ----------------------------------------

   //listar producto
   public function listarProducto()
   {
        $productos = producto::toBase()->get();
        return view('producto.index',compact('productos'));
   }

    //listar catalogo
    public function listarCatalogo()
    {
         $productos = producto::toBase()->get();
         return view('producto.catalogo',compact('productos'));
    }

   public function crearProducto()
   {
     return view('producto.create');
   }

   public function registrarProducto(Request $request)
   {
         //regristro con arreglo en forma obligatoria obligatoria
  
    //requiere es ingreso obligatoria de datos
    $reglas = [
      'descripcion' => 'required',
      'precio' => 'required',
      'cantidad' => 'required'
      ];
      $mensajeDeError = [
      'required' => 'Ingreso de datos erróneo'
      ];
      $this->validate($request, $reglas, $mensajeDeError);
      producto::create([
      'descripcion' => $request->descripcion,
      'slug' => Str::slug($request->descripcion),
      'precio' => $request->precio,
      'cantidad' => $request->cantidad
      ]);
      $this->mensaje('message','Producto guardado correctamente!');
      return redirect()->back();
   }


   public function formularioEditarProducto(Producto $producto)
   {
   echo "Formulario De Edicion";
   return view('Producto.edit',compact('producto'));
   }


   public function ActualizarProducto(Request $request, Producto $Producto)
   {
   echo "FORMULARIO PARA EDITAR Producto";
   $reglas = [
    'descripcion' => 'required',
   'precio' => 'required',
   'cantidad' => 'required'
   ];
   $mensajeDeError = [
   'required' => 'Ingreso de datos erróneo'
   ];
   $this->validate($request, $reglas, $mensajeDeError);
   $Producto->update([
   
   'descripcion' => $request->descripcion,
   'precio' => strtolower($request->precio),
   'cantidad' => strtolower($request->cantidad)
   ]);
   $this->mensaje('message','Producto Actualizado Correctamente!');
return redirect()->back();
}


    public function VerProducto(Producto $producto)
        {
          return view('Producto.view',compact('producto'));
        }



   public function EliminarProducto(Producto $Producto)
       {
           $Producto->delete();
           $this->mensaje('message','Producto Eliminado Correctamente');
           return redirect()->back();
       }

       


public function mensaje(string $nombre = null, string $mensaje = null)
{
return session()->flash($nombre,$mensaje);
}
}
