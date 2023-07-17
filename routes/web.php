<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
}); 
Route::get('/welcome', function () {
    return view('home');
}); 


// Rutas CRUD
/* Crear */
Route::get('admin/productos/crear', 'App\Http\Controllers\ProductosController@crear')->name('admin/productos/crear');
Route::put('admin/productos/store', 'App\Http\Controllers\ProductosController@store')->name('admin/productos/store');

/* Leer */ 
Route::get('admin/productos/show/{id}', 'App\Http\Controllers\ProductosController@show')->name('admin/productos/detalles'); 

/* Actualizar */
Route::get('admin/productos/actualizar/{id}', 'App\Http\Controllers\ProductosController@actualizar')->name('admin/productos/actualizar');
Route::put('admin/productos/update/{id}', 'App\Http\Controllers\ProductosController@update')->name('admin/productos/update');

/* Eliminar */
Route::put('admin/productos/eliminar/{id}', 'App\Http\Controllers\ProductosController@eliminar')->name('admin/productos/eliminar'); 

/* Vista Principal */
Route::get('admin/productos', 'App\Http\Controllers\ProductosController@index')->name('admin/productos'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/nosotros', [App\Http\Controllers\NosotrosController::class, 'index'])->name('nosotros');

/* Crear */
Route::get('admin/clientes/crear', 'App\Http\Controllers\ClientesController@crear')->name('admin/clientes/crear');
Route::put('admin/clientes/store', 'App\Http\Controllers\ClientesController@store')->name('admin/clientes/store');

/* Leer */ 
Route::get('admin/clientes/show/{id}', 'App\Http\Controllers\ClientesController@show')->name('admin/clientes/detalles'); 

/* Actualizar */
Route::get('admin/clientes/actualizar/{id}', 'App\Http\Controllers\ClientesController@actualizar')->name('admin/clientes/actualizar');
Route::put('admin/clientes/update/{id}', 'App\Http\Controllers\ClientesController@update')->name('admin/clientes/update');

/* Eliminar */
Route::put('admin/clientes/eliminar/{id}', 'App\Http\Controllers\ClientesController@eliminar')->name('admin/clientes/eliminar'); 

/* Vista Principal */
Route::get('admin/clientes', 'App\Http\Controllers\ClientesController@index')->name('admin/clientes'); 
