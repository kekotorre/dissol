<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Direccion;

class DireccionesController extends Controller
{
    public function store(Request $request){
        $direccion = new Direccion;

        $direccion->direccion = $request->direccion;
        $direccion->pais = $request->pais;
        $direccion->provincia = $request->provincia;
        $direccion->poblacion = $request->poblacion;
        $direccion->cod_postal = $request->codigo_postal;
        $direccion->user_id = Auth()->user()->id;

        $direccion->save();

        return back();
    }
}
