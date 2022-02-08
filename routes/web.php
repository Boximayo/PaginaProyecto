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
