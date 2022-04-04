<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use Illuminate\Support\Facades\DB;

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
