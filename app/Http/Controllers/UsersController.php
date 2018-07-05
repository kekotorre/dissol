<?php

namespace App\Http\Controllers;

Use App\User;
Use App\App\Direccion;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //$usuario = User::findOrFail($id);
    //return view('usuarios.index', compact('usuario'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //$usuario = User::findOrFail($id);
    //return view('usuarios.index', compact('usuario'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit()
  {
      return view('usuarios.edit');
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
    $user = User::findOrFail($id);

    $user->name = $request->name;
    $user->apellido_1 = $request->apellido_1;
    $user->apellido_2 = $request->apellido_2;
    $user->movil = $request->movil;

    $user->save();

    return redirect('datos-personales');

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

 
}
