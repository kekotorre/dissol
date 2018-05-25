<?php

namespace App\Http\Controllers;

use App\CarouselPrincipal;
use Illuminate\Http\Request;

class CarouselPrincipalController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //Mostraremos todo el contenido de la tabla CarouselPrincipal
    $carouselP = CarouselPrincipal::all();
    //return view('index', compact('carouselP'));
    return view('admin.carouselPrincipal.index', compact('carouselP'));
  }

  public function carousel()
  {
    //Mostraremos todo el contenido de la tabla CarouselPrincipal
    $carouselP = CarouselPrincipal::all();
    //return view('index', compact('carouselP'));
    return view('index', compact('carouselP'));
  }
  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('admin.carouselPrincipal.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $titulo = $request->input('nombre');
    $file = $request->file('photo');
    //guardar la imagen en el servidor
    $path = 'img/carousel_index';
    //$fileName = uniqid() . $file->getClientOriginalName();
    $fileName = $file->getClientOriginalName();
    $file->move($path, $fileName);
    $ruta = $path . '/' . $fileName;
    //echo "nombre:" . $fileName . "<br />";
    //echo "ruta: " . $ruta;
    //guardar ruta en la BBDD
    //CarouselPrincipal::create(request()->all());
    /*$carouselP = new CarouselPrincipal();
    $carouselP->titulo = $request->input('nombre');
    $carouselP->ruta = $ruta;
    $carouselP->save();*/


    CarouselPrincipal::create(array('titulo' => $titulo, 'ruta' => $ruta ));
    return back()->with('notice', 'Se ha subido correctamente el Carrusel');
    //echo $request->input('nombre');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Carousel_principal  $carousel_principal
  * @return \Illuminate\Http\Response
  */
  public function show(Carousel_principal $carousel_principal)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Carousel_principal  $carousel_principal
  * @return \Illuminate\Http\Response
  */
  public function edit(Carousel_principal $carousel_principal)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Carousel_principal  $carousel_principal
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Carousel_principal $carousel_principal)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Carousel_principal  $carousel_principal
  * @return \Illuminate\Http\Response
  */
  public function destroy(Carousel_principal $carousel_principal)
  {
    //
  }

  public function hide($id)
  {
    //Función con la que actualizamos el valor del campo visble a 0
    $carouselP = CarouselPrincipal::all()->find($id);
    $carouselP->update(array('visible' => '0'));
    return redirect()->route('carousel-principal.index');
  }

  public function activate($id)
  {
    //Función con la que actualizamos el valor del campo visble a 0
    $carouselP = CarouselPrincipal::all()->find($id);
    $carouselP->update(array('visible' => '1'));
    return redirect()->route('carousel-principal.index');
  }
}
