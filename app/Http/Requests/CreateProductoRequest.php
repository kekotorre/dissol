<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductoRequest extends FormRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return true;
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    return [
      'referencia' => 'required',
      'nombre' => 'required',
      'tipo_producto' => 'required',
      'precio' => 'required',
      'descuento' => 'required',
      'cantidad_descuento' => 'required',
      //caracteristicas del producto
      'formato' => 'required',
      'medidas' => 'required',
      'tipo_papel' => 'required',
      'descripcion' => 'required',
      //Fotos del producto
      'portada_principal' => 'required',
      'portada' => 'required',
      'dorso' => 'required',

    ];
  }
}
