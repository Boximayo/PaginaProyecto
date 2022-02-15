<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\ubicaciones;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index( )
    {
        $search= request()->query('search');
        if ($search){
            $productos=DB::table('productos')
            ->select('id', 'nombre', 'descripcion')
            ->where('nombre','LIKE','%'.$search.'%')
            ->orWhere('descripcion','LIKE','%'.$search.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        }else {
            $productos=productos::all();
        }
        // $search=$request->get('search');
        // $productos=productos::where('nombre',' LIKE', "%{$search}%")->paginate();

        $ubicaciones=ubicaciones::all();
        return view('Index/Index', ['productos'=>$productos, 'ubicaciones'=>$ubicaciones, 'search'=>$search]);
    }
}
