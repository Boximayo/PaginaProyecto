<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class ProductosController extends Controller
{
    public function index()
    {
        $productos=productos::all();
        return view('Productos/Paletas', compact('productos'));
    }

    public function index2()
    {
        $productos=productos::all();
        return view('Productos/Polen', compact('productos'));
    }

    public function index3()
    {
        $productos=productos::all();
        return view('Productos/Jalea', compact('productos'));
    }

    public function index4()
    {
        $productos=productos::all();
        return view('Productos/Propoleo', compact('productos'));
    }
}
