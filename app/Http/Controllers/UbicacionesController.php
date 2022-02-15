<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;
use App\Models\ubicaciones;
use Illuminate\Support\Facades\DB;

class UbicacionesController extends Controller
{
    public function index()
    {
        $search= request()->query('search');
        if ($search){
            $ubicaciones=DB::table('ubicaciones')
            ->select('id', 'nombre', 'descripcion')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $ubicaciones=ubicaciones::all();
        }

        return view('Ubicaciones/Centro', ['ubicaciones'=>$ubicaciones, 'search'=>$search]);
    }

    public function index2()
    {
        $search= request()->query('search');
        if ($search){
            $ubicaciones=DB::table('ubicaciones')
            ->select('id', 'nombre', 'descripcion')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $ubicaciones=ubicaciones::all();
        }

        return view('Ubicaciones/Cantera', ['ubicaciones'=>$ubicaciones, 'search'=>$search]);
    }

    public function index3()
    {
        $search= request()->query('search');
        if ($search){
            $ubicaciones=DB::table('ubicaciones')
            ->select('id', 'nombre', 'descripcion')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $ubicaciones=ubicaciones::all();
        }

        return view('Ubicaciones/Loma', ['ubicaciones'=>$ubicaciones, 'search'=>$search]);
    }
}
