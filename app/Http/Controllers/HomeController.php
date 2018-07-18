<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\User;
use App\Composicion;
use App\Mensaje;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user =  User::all();
        $mensaje = Mensaje::all();
        $pedidos =  Pedido::where('pendiente', 1)->get();
        //$composicion = Composicion::all();
        return view('admin.home', compact('pedidos', 'mensaje'));
    }
}
