<?php

namespace App\Http\Controllers;

use App\Models\galerias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriaController extends Controller
{
    public function index()
    {
        $search= request()->query('search');
        if ($search){
            $galerias=DB::table('galeria')
            ->select('id', 'nombre', 'descripcion')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $galerias=galerias::all();
        }

        return view('Galeria/Granja', ['galerias'=>$galerias, 'search'=>$search]);
    }

    public function index2()
    {
        $search= request()->query('search');
        if ($search){
            $galerias=DB::table('galeria')
            ->select('id', 'nombre', 'descripcion')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $galerias=galerias::all();
        }

        return view('Galeria/Tiendas', ['galerias'=>$galerias, 'search'=>$search]);
    }

    public function index3()
    {
        $search= request()->query('search');
        if ($search){
            $galerias=DB::table('galeria')
            ->select('id', 'nombre', 'descripcion')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $galerias=galerias::all();
        }

        return view('Galeria/Produccion', ['galerias'=>$galerias, 'search'=>$search]);
    }

}
