<?php

namespace App\Http\Controllers;

use App\Producto;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductoRequest;

class ProductosController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $productos = Producto::all();
    return view('admin.productos.index', compact('productos'));
  }

  public function saludo()
  {
    $productos = "hola";
    return view('detalles', compact('productos'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('admin.productos.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request $request
  * @return \Illuminate\Http\Response
  */
  public function store(CreateProductoRequest $request)
  {
    //dd($request);
    //Datos del Producto
    $referencia = $request->input('referencia');
    $nombre = $request->input('nombre');
    $tipo_producto = $request->input('tipo_producto');
    $precio = $request->input('precio');
    $descuento = $request->input('descuento');
    $porcentaje = $request->input('porcentaje');
    $formato = $request->input('formato');
    $medidas = $request->input('medidas');
    $tipo_papel = $request->input('tipo_papel');
    $descripcion = $request->input('descripcion');

    //Imagenes
    $file_portada_principal = $request->file('portada_principal');
    $file_portada = $request->file('portada');
    $file_dorso = $request->file('dorso');
    //$file_interior = $request->file('interior');

    //dd($file_portada = $request->file('portada'));
    //dd($file_interior = $request->file('interior'));

    //Ruta del servidor
    $path = 'img/productos/' . $tipo_producto;

    //Extraemos el nombre de la Imagen
    $fileName_portada_principal = $file_portada_principal->getClientOriginalName();
    $fileName_portada = $file_portada->getClientOriginalName();
    $fileName_dorso = $file_dorso->getClientOriginalName();
    //$fileName_interior = $file_interior->getClientOriginalName();

    //Guardamos las Imagenes en el Servidor
    $file_portada_principal->move($path, $fileName_portada_principal);
    $file_portada->move($path, $fileName_portada);
    $file_dorso->move($path, $fileName_dorso);
    //$file_interior->move($path, $fileName_interior);

    //Composicion de la ruta
    $ruta_portada_principal = $path . '/' . $fileName_portada_principal;
    $ruta_portada = $path . '/' . $fileName_portada;
    $ruta_dorso = $path . '/' . $fileName_dorso;
    //$ruta_interior = $path . '/' . $fileName_interior;

    //dd($ruta_interior);

    Producto::create(array(
      'referencia' => $referencia,
      'nombre' => $nombre,
      'tipo_producto' => $tipo_producto,
      'precio' => $precio,
      'descuento' => $descuento,
      'porcentaje' => $porcentaje,
      'formato' => $formato,
      'medidas' => $medidas,
      'tipo_papel' => $tipo_papel,
      'descripcion' => $descripcion,
      'portada_principal' => $ruta_portada_principal,
      'portada' => $ruta_portada,
      'dorso' =>$ruta_dorso,
      //'interior' => $ruta_interior
    ));
    return redirect()->route('producto.create')->with('notice', 'Se ha guardado correctamente el Producto');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id_producto)
  {

  }

  public function busqueda(Request $request)
  {
    $producto = Producto::findOrFail($request);
    //return view('admin.productos.index', compact('productos'));
    return view('admin.productos.index1', compact('producto'));
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

  public function hide($id_producto)
  {
    //Función con la que actualizamos el valor del campo visble a 0
    //dd(Producto::findOrFail($id_producto));
    $producto = Producto::all()->find($id_producto);
    $producto->update(array('visible' => '0'));
    return redirect()->route('producto.index');
  }

  public function activate($id_producto)
  {
    //Función con la que actualizamos el valor del campo visble a 0
    $producto = Producto::all()->find($id_producto);
    $producto->update(array('visible' => '1'));
    return redirect()->route('producto.index');
  }
}
