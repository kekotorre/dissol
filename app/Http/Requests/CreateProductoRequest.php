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
      'referencia' => 'required|numeric',
      'nombre' => 'required',
      'tipo_producto' => 'required',
      'precio' => 'required',
      'formato' => 'required',
      'medidas' => 'required',
      'tipo_papel' => 'required',
      'descripcion' => 'required',
      'portada_principal' => 'required|image',
      'portada' => 'required|image',
    ];
  }
}
