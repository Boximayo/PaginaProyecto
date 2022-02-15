<?php

namespace App\Http\Controllers;

use App\Models\galerias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactanosController extends Controller
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

        return view('Contactanos/Contactanos', ['galerias'=>$galerias, 'search'=>$search]);
    }
}
