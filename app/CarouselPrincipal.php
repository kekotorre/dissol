<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarouselPrincipal extends Model
{
  protected $table ="carousel_principal";
  protected $fillable = ['titulo', 'ruta', 'visible'];
}
