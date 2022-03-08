<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\stdClass;

class ProductosController extends Controller
{
    public function index()
    {
        $search= request()->query('search');
        if ($search){
            $productos=DB::table('productos')
            ->select('id', 'nombre', 'descripcion', 'tipo')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $productos=productos::all();
        }

        return view('Productos/Paletas', ['productos'=>$productos, 'search'=>$search]);
    }

    public function index2()
    {
        $search= request()->query('search');
        if ($search){
            $productos=DB::table('productos')
            ->select('id', 'nombre', 'descripcion', 'tipo')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $productos=productos::all();
        }

        return view('Productos/Polen', ['productos'=>$productos, 'search'=>$search]);
    }

    public function index3()
    {
        $search= request()->query('search');
        if ($search){
            $productos=DB::table('productos')
            ->select('id', 'nombre', 'descripcion', 'tipo')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $productos=productos::all();
        }

        return view('Productos/Jalea', ['productos'=>$productos, 'search'=>$search]);
    }

    public function index4()
    {
        $search= request()->query('search');
        if ($search){
            $productos=DB::table('productos')
            ->select('id', 'nombre', 'descripcion', 'tipo')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $productos=productos::all();
        }

        return view('Productos/Propoleo', ['productos'=>$productos, 'search'=>$search]);
    }

    public function create()
    {
        $search= request()->query('search');
        if ($search){
            $productos=DB::table('productos')
            ->select('id', 'nombre', 'descripcion', 'tipo')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $productos=productos::all();
        }
        return view ('Productos.create', ['productos'=>$productos, 'search'=>$search]);
    }

    public function store()
    {

            productos::create([
                'nombre' => request('nombre'),
                'descripcion' => request('descripcion'),
                'tipo' => request('tipo'),
            ]);

            return redirect()->route('index.index');

    }

}
