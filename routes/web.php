<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UbicacionesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdministradorController;

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
     return view('Index/Index');
 });

route::get('/productos', function(){
	return view('Productos/Productos');
})->name('productos');

route::get('/galeria', function(){
	return view('Galeria/Galeria');
})->name('galerias');

route::get('/ubicaciones', function(){
	return view('Ubicaciones/Ubicaciones');
})->name('ubicaciones');

route::get('/contactanos', function(){
	return view('Contactanos/Contactanos');
})->name('contactanos');

route::get('/mapa', function(){
	return view('Mapa/Mapa');
})->name('mapa');


//RUTAS PRODUCTOS

Route::get('/productos/paletas', [ProductosController::class,'index' ])->name('productos.paletas');
Route::get('/productos/polen', [ProductosController::class,'index2' ])->name('productos.polen');
Route::get('/productos/jalea', [ProductosController::class,'index3' ])->name('productos.jalea');
Route::get('/productos/propoleo', [ProductosController::class,'index4' ])->name('productos.propoleo');




//RUTAS GALERIA
route::get('/galeria-granjas', function(){
	return view('Galeria/Granja');
})->name('galerias.granja');

route::get('/galeria-tiendas', function(){
	return view('Galeria/Tiendas');
})->name('galerias.tiendas');

route::get('/galeria-produccion', function(){
	return view('Galeria/Produccion');
})->name('galerias.produccion');


//RUTAS UBICACIONES

Route::get('/ubicaciones/centro', [UbicacionesController::class,'index' ])->name('ubicaciones.centro');
Route::get('/ubicaciones/cantera', [UbicacionesController::class,'index2' ])->name('ubicaciones.cantera');
Route::get('/ubicaciones/loma', [UbicacionesController::class,'index3' ])->name('ubicaciones.loma');


//RUTAS INDEX

Route::get('/', [IndexController::class,'index' ])->name('index.index');

Route::get('/administracion' , [AdministradorController::class , 'index'])
->middleware('auth.admin')
->name('admin.index');


Route::middleware(['auth.admin', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
