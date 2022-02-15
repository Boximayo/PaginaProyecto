<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UbicacionesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\MapaController;

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

// Route::get('/', function () {
//     return view('Index/Index');
// });

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

Route::get('/galeria/granjas', [GaleriaController::class,'index' ])->name('galerias.granja');
Route::get('/galeria/tiendas', [GaleriaController::class,'index2' ])->name('galerias.tiendas');
Route::get('/galeria/produccion', [GaleriaController::class,'index3' ])->name('galerias.produccion');



//RUTAS UBICACIONES

Route::get('/ubicaciones/centro', [UbicacionesController::class,'index' ])->name('ubicaciones.centro');
Route::get('/ubicaciones/cantera', [UbicacionesController::class,'index2' ])->name('ubicaciones.cantera');
Route::get('/ubicaciones/loma', [UbicacionesController::class,'index3' ])->name('ubicaciones.loma');


//RUTAS INDEX

Route::get('/', [IndexController::class,'index' ])->name('index.index');

//RUTAS CONTACTANOS
Route::get('/contactanos', [ContactanosController::class,'index' ])->name('contactanos');

//RUTAS MAPAS
Route::get('/mapa', [MapaController::class,'index' ])->name('mapa');
