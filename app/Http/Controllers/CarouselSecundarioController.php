<?php

namespace App\Http\Controllers;

use App\CarouselSecundario;
use Illuminate\Http\Request;

class CarouselSecundarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //Mostraremos todo el contenido de la tabla CarouselPrincipal
      $carouselS = CarouselSecundario::all();
      //return view('carousel_principal.index', compact('carouselP'));
      return view('admin.carouselSecundario.index', compact('carouselS'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carouselSecundario.create');
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
      $path = 'img/carousel_secundario';
      //uniqid sirve para generar un numero aleatorio
      //$fileName = uniqid() . $file->getClientOriginalName();
      //obtenemos el nombre de la imagen
      $fileName = $file->getClientOriginalName();
      //movemos la imagen al servidor
      $file->move($path, $fileName);
      $ruta = $path . '/' . $fileName;
      //guardar ruta en la BBDD
      //CarouselPrincipal::create(request()->all());
    /*  $carouselP = new CarouselPrincipal();
      $carouselP->titulo = $request->input('nombre');
      $carouselP->ruta = $ruta;
      $carouselP->save();*/

      CarouselSecundario::create(array('titulo' => $titulo, 'ruta' => $ruta ));
      return back()->with('notice', 'Se ha subido correctamente el Carrusel');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarouselSecundario  $carouselSecundario
     * @return \Illuminate\Http\Response
     */
    public function show(CarouselSecundario $carouselSecundario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarouselSecundario  $carouselSecundario
     * @return \Illuminate\Http\Response
     */
    public function edit(CarouselSecundario $carouselSecundario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarouselSecundario  $carouselSecundario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarouselSecundario $carouselSecundario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarouselSecundario  $carouselSecundario
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarouselSecundario $carouselSecundario)
    {
        //
    }

    public function hide($id)
    {
      //Función con la que actualizamos el valor del campo visble a 0
      $carouselS = CarouselSecundario::all()->find($id);
      $carouselS->update(array('visible' => '0'));
      return redirect()->route('carousel-secundario.index');
    }

    public function activate($id)
    {
      //Función con la que actualizamos el valor del campo visble a 0
      $carouselS = CarouselSecundario::all()->find($id);
      $carouselS->update(array('visible' => '1'));
      return redirect()->route('carousel-secundario.index');
    }
}
