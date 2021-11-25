<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.welcome');
});

//como apis=(son para verificar consultas de los formularios) buen es un especie de crud
//c=pos
//r=get
//u=patch
//delete
//
Route::get('/', function () {
    return redirect('/inicio');
    });
    
//route::get('/producto','productoController@producto');
Route::get('/producto', 'App\Http\Controllers\productoController@productoinicio');
Route::get('/inicio', 'App\Http\Controllers\productoController@inicio');
Route::get('/ventas', 'App\Http\Controllers\productoController@ventainicio');
Route::get('/cliente', 'App\Http\Controllers\clienteController@clienteinicio');


 
Route::get('/index', 'App\Http\Controllers\productoController@crearProducto')->name('producto.agregar');
Route::post('/producto', 'App\Http\Controllers\productoController@registrarProducto')->name('producto.guardar');
    
Route::get('/producto', 'App\Http\Controllers\productoController@listarProducto')->name('producto.listar');

//CATALOGO
Route::get('/inicio', 'App\Http\Controllers\productoController@listarcatalogo');


Route::get('/producto/editar/{producto}', 'App\Http\Controllers\productoController@formularioEditarProducto')->name('producto.editar');
Route::patch('/producto/editar/{producto}', 'App\Http\Controllers\productoController@ActualizarProducto')->name('producto.actualizar');

Route::get('/producto/{producto}', 'App\Http\Controllers\productoController@VerProducto')->name('producto.ver');
    
 Route::delete('/producto/{producto}', 'App\Http\Controllers\productoController@EliminarProducto')->name('producto.eliminar');


 //--------------------------
 Route::get('/formulario', 'App\Http\Controllers\ventaController@verformularioVenta');
 //Route::post('/clientes', 'App\Http\Controllers\ventaController@registrarVenta')->name('venta.guardar');
 //Route::get('/inicio', 'App\Http\Controllers\ventaController@verinicio');

 
 Route::get('/cliente', 'App\Http\Controllers\ventaController@probar')->name('probar.guardar');
    ?>