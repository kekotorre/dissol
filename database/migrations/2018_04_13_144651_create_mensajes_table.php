<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('mensajes', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nombre');
      $table->integer('telefono');
      $table->string('email');
      $table->string('asunto');
      $table->text('mensaje');
      $table->boolean('visible')->default(true);
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    //
  }
}
