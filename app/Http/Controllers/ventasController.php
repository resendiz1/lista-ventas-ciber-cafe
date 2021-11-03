<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ventasController extends Controller
{
    public function store(){

        
        $fecha = now()->format('d-m-Y');

        $imagen = request()->file('foto')->store('public');
        
       
        // request()->validate([
        //     request('descripcion') => 'required',
        //     request('area') => 'required',
        //     request('')
        // ]);

        
  
        

        Venta::create([
            'descripcion' => request('descripcion'),
            'precio' => request('area_trabajo'),
            'fecha' => $fecha,
            'foto1' => $imagen
        ]);
        return redirect()->route('hoy')->with('status', 'Actividad registrada');
    }

    
    public function index(){

        $venta = Venta::distinct('created_at')->get('created_at');
        $ventas = DB::select('SELECT DISTINCT fecha FROM ventas ');
        return view('inicio', compact('ventas'));
    }



    public function hoy(){

        $now = now()->format('d-m-Y');
        $hoy = DB::select("SELECT*FROM ventas WHERE fecha LIKE '$now' ");
        $suma = DB::select("SELECT sum(precio) FROM ventas WHERE fecha LIKE '$now'  ");
         
        return view('hoy', compact('hoy'));

    }




    public function show($fecha){

        $ventas = DB::select("SELECT*FROM ventas WHERE fecha LIKE '$fecha' ");
     
        return view('actividades', compact('ventas', 'fecha'));
    }


    public function delete(){
        return 'Hola mundo';
    }







}
