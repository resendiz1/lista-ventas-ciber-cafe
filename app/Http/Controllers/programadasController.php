<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programadasController extends Controller
{


    public function show(){
        return view('actividades_programadas');
    }

    public function pendientes(){
        return view('actividades_pendientes');
    }
}
