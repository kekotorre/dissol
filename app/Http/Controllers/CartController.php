<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Producto;

class CartController extends Controller
{
    //Constructor
    public function __construct(){
        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    //Show
    public function show(){
        $cart = \Session::get('cart');
        //$cart = 1;
        $total = $this->total();
        return view('carrito.cart', compact('cart', 'total'));
    }

    //Resumen
    public function resumen(){
        $cart = \Session::get('cart');
        //$cart = 1;
        $total = $this->total();
        return view('carrito.resumen', compact('cart', 'total'));
    }

    //Add item
    public function add(Producto $producto, Request $request){
        //dd($producto);

        $cart = \Session::get('cart');
        $producto->quantity = 10;
        $producto->composition = $request->input('compos');


        $cart[$producto->id] = $producto;
        //dd($cart);
        \Session::put('cart', $cart);
        //dd($cart = \Session::get('cart'));

        return redirect()->route('carrito');
    }

    //Delete item
    public function delete(Producto $producto){
        $cart = \Session::get('cart');
        unset($cart[$producto->id]);
    	\Session::put('cart', $cart);

    	return redirect()->route('carrito');

    }

    //Update price item
    public function update(Producto $producto, $quantity){
        $cart = \Session::get('cart');
        $cart[$producto->id]->quantity = $quantity;
    	\Session::put('cart', $cart);

    	return redirect()->route('carrito');
    }

    //Total a pagar
    private function total(){
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->precio * $item->quantity;
        }

        return $total;
    }

    //

}
