<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarouselSecundario extends Model
{
  protected $table ="carousel_secundarios";
  protected $fillable = ['titulo', 'ruta', 'visible'];
}
