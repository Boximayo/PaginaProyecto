<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\ubicaciones;

class IndexController extends Controller
{
    public function index()
    {
        $productos=productos::all();
        $ubicaciones=ubicaciones::all();
        return view('Index/Index', compact('productos', 'ubicaciones'));
    }
}
