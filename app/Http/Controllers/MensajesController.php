<?php

namespace App\Http\Controllers;

use App\Notifications\PedidoRealizado;
use App\Notifications\UserRegister;
use Illuminate\Http\Request;

use App\Mensaje;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class MensajesController extends Controller
{
    use Notifiable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mensajes = Mensaje::all();

        return view('admin.mensajes.index', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Message::create($request->all());

        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $telefono = $request->input('telefono');
        $asunto = $request->input('asunto');
        $email = $request->input('email');
        $mensaje = $request->input('mensaje');

        $usuario = $nombre. " " .$apellido;

        //dd($usuario);

        Mensaje::create(array(
          'nombre' => $usuario,
          'telefono' => $telefono,
          'email' => $email,
          'asunto' => $asunto,
          'mensaje' => $mensaje,
        ));

        return redirect()->route('contacto')->with('notice', 'Se ha guardado correctamente el Producto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function emailRegister($user){
        Notification::send($user, new UserRegister());
    }

    public static function emailPedidoRealizado($numero_pedido){
        Notification::send(Auth::user(), new PedidoRealizado($numero_pedido));
    }
}
