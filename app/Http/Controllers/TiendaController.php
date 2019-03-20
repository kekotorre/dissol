<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class TiendaController extends Controller
{

    public function bodas(){
        $bodas = Producto::where('visible', 1)->where('tipo_producto' ,'bodas')
        ->orderBy('referencia', 'asc')->paginate(12);
        //dd($bodas);
        return view('store.bodas', compact('bodas'));
    }

    public function comuniones(){
        $comuniones = Producto::where('visible', 1)->where('tipo_producto' ,'comuniones')
        ->orderBy('referencia', 'asc')->paginate(12);
        //dd($producto);
        return view('store.comuniones', compact('comuniones'));
    }

    public function natalicios(){
        $natalicios = Producto::where('visible', 1)->where('tipo_producto' ,'natalicios')
        ->orderBy('referencia', 'asc')->paginate(12);
        //dd($producto);
        return view('store.natalicios', compact('natalicios'));
    }

    public function detalles(){
        $detalles = Producto::where('visible', 1)->where('tipo_producto' ,'detalles')
        ->orderBy('referencia', 'asc')->paginate(12);
        //dd($producto);
        return view('store.detalles', compact('detalles'));
    }

    //contactos
    public function contacto(){
        return view('store.contacto');
    }

    public function show($url){
        $producto = Producto::where('url', $url)->first();
        return view('store.detail', compact('producto'));
    }

    public function personalizar($id){
        $producto = Producto::findOrFail($id);

        return view('store.herramienta.personalizar2', compact('producto'));
    }
}
