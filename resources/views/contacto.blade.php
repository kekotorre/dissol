@extends('layouts/layout')

@section('contenido')
  <!-- Sección de contacto y ubicación -->
  <section class="container">
    <div class="row">
      <div class="col-12 col-md-6" id="contacto">
        <form action="" class="">
          <div class="form-group row">
            <div class="col-12 col-md-6 mb-2">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" />
            </div>
            <div class="col-12 col-md-6">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-12 col-md-6 mb-2">
              <label for="telefono">Telefono de Contacto</label>
              <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" />
            </div>
            <div class="col-12 col-md-6 mb-2">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Email" />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-12 col-md-6 mb-2">
              <label for="asunto">Asunto de tu Mensaje</label>
              <select class="form-control" name="asunto" id="asunto">
                <option value="">Escoger una categoría</option>
                <option value="Información sobre un modelo">Información sobre un modelo</option>
                <option value="Detalles de la fabricación y del envio">Detalles de la fabricación y del envio</option>
                <option value="Informaciónn del pedido">Informaciónn del pedido</option>
                <option value="Otras preguntas">Otras preguntas</option>
              </select>
            </div>
            <div class="col-12 col-md-6 mb-2">
              <label for="archivo">Subir un archivo</label>
              <input type="file" class="form-file" style="font-size:10px;" accept=".pdf,.jpg,.png" name="adjunto" id="adjunto" multiple/>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-12 mb-2">
              <label for="mensaje">Mensaje</label>
              <textarea class="form-control" rows="6" name="mensaje" id="mensaje" placeholder="Escribenos tu pregunta..."></textarea>
            </div>
          </div>

        </form>

      </div>
      <div class="col-12 col-md-6" id="maps">
        <iframe id="k" class="col-md-12"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1477.032950667846!2d-3.5230139206872226!3d40.35413865334762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd423b94f79e4687%3A0x4f14f0e0f63db747!2sDissol!5e0!3m2!1ses!2ses!4v1510009020584"
        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  @stop
