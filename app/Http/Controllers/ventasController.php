<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class ventasController extends Controller
{
    public function store(){

        Venta::create([
            'descripcion' => request('descripcion'),
            'precio' => request('cantidad')
        ]);
        return redirect()->route('hoy')->with('status', 'Venta hecha');
    }

    public function index(){
        $ventas = Venta::distinct('created_at')->get('created_at');

        return view('inicio', compact('ventas'));
    }
}
