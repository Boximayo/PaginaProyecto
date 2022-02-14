<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ubicaciones;

class UbicacionesController extends Controller
{
    public function index()
    {
        $ubicaciones=ubicaciones::all();
        return view('Ubicaciones/Centro', compact('ubicaciones'));
    }

    public function index2()
    {
        $ubicaciones=ubicaciones::all();
        return view('Ubicaciones/Cantera', compact('ubicaciones'));
    }

    public function index3()
    {
        $ubicaciones=ubicaciones::all();
        return view('Ubicaciones/Loma', compact('ubicaciones'));
    }
}
