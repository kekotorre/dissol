@extends('store/herramienta/layout')

@section('contenido')

<div class="container-fluid" style="border-bottom: 1px solid black">
  <!-- Menú de herramientas de diseño-->
  <!-- Fila -->
  <div id="menu" class="row">
    <div class="col-lg-12" style="border: 1px  black">
      <div class="row">
        <div class="col-lg-2" style="border: 1px  green">
          <p style="margin-top: 1px; " class="text-center">Opciones</p>
          <div class="row">
            <div class="cuadrado text-center">
              <a href="#" onclick="add()"><i class="fas fa-font fa-2x"></i></a>
            </div>
            <div class="cuadrado text-center">
              <a href="#"  onclick="italic()"><i class="fas fa-italic fa-2x"></i></a>
            </div>
            <div class="cuadrado text-center">
              <a href="#"  onclick="bold()"><i class="fas fa-bold fa-2x"></i></a>
            </div>
            <div class="cuadrado text-center">
              <a href="#"  onclick="underline()"><i class="fas fa-underline fa-2x"></i></a>
            </div>
            <div class="cuadrado text-center">
              <a href="#"  onclick="eliminar()"><i style="color:red;" class="fas fa-trash-alt fa-2x"></i></a>
            </div>
          </div>
          <!--<a href="#" onclick="loadAndUse('Pacifico')" class="btn btn-primary">Añadir Texto</a>-->
          <div class="row">
            <div class="cuadrado text-center">
              <a href="#" onclick="align('left')"><i class="fas fa-align-left fa-2x"></i></a>
            </div>
            <div class="cuadrado text-center">
              <a href="#" onclick="align('center')"><i class="fas fa-align-center fa-2x"></i></a>
            </div>
            <div class="cuadrado text-center">
              <a href="#" onclick="align('right')"><i class="fas fa-align-right fa-2x"></i></a>
            </div>
            <div class="cuadrado text-center">
              <a href="#"  onclick="align('justify')"><i class="fas fa-align-justify fa-2x"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-5" style="border: 1px  green;">
          <p style="margin-top: 1px; " class="text-center">Tipogrfías</p>
          <div class="row">
            <a onclick="loadAndUse('Pacifico')" href="#"><font style="font-family: Pacifico; vertical-align: inherit; margin-left: 25px; margin-right: 5px;">Pacifico</font></a>
            <a onclick="loadAndUse('Inconsolata')" href="#"><font style="font-family: Inconsolata; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Inconsolata</font></a>
            <a onclick="loadAndUse('VT323')" href="#"><font style="font-family: VT323; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">VT323</font></a>
            <a onclick="loadAndUse('Quicksand')" href="#"><font style="font-family: Quicksand; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Quicksand</font></a>
            <a onclick="loadAndUse('Cinzel')" href="#"><font style="font-family: Cinzel; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Cinzel</font></a>
            <a onclick="loadAndUse('Montserrat')" href="#"><font style="font-family: Montserrat; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Montserrat</font></a>
            <a onclick="loadAndUse('Wendy One')" href="#"><font style="font-family: Wendy One; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Wendy</font></a>
          </div>
          <div class="row">
            <a onclick="loadAndUse('Dancing Script')" href="#"><font style="font-family: Dancing Script; vertical-align: inherit; margin-left: 25px; margin-right: 5px;">Dancing</font></a>
            <a onclick="loadAndUse('Eater')" href="#"><font style="font-family: Eater; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Eater</font></a>
            <a onclick="loadAndUse('Encode Sans Condensed')" href="#"><font style="font-family: Encode; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Encode</font></a>
            <a onclick="loadAndUse('Gloria Hallelujah')" href="#"><font style="font-family: Gloria Hallelujah; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Gloria Hallelujah</font></a>
            <a onclick="loadAndUse('Indie Flower')" href="#"><font style="font-family: Indie Flower; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Indie Flower</font></a>
            <a onclick="loadAndUse('Spirax')" href="#"><font style="font-family: Spirax; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Spirax</font></a>
            <a onclick="loadAndUse('Lora')" href="#"><font style="font-family: Lora; vertical-align: inherit; margin-left: 5px; margin-right: 5px;">Lora</font></a>
          </div>
        </div>
        <div class="col-lg-2" style="border: 1px  red;">
          <p style="margin-top: 1px; " class="text-center">Color</p>
          <div class="row">
            <a onclick="color('rgb(0, 0, 0)')" href="#"><div class="" style=" margin: 6px; border: 0.1em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(0, 0, 0);"></div></a>
            <a onclick="color('rgb(237, 48, 36)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(237, 48, 36);"></div></a>
            <a onclick="color('rgb(36, 177, 237)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(36, 177, 237);"></div></a>
            <a onclick="color('rgb(36, 237, 177)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(36, 237, 177);"></div></a>
            <a onclick="color('rgb(237, 36, 181)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(237, 36, 181);"></div></a>
            <a onclick="color('rgb(15, 189, 38)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(15, 189, 38);"></div></a>
            <a onclick="color('rgb(146, 251, 226)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid  ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(146, 251, 226);"></div></a>
            <a onclick="color('rgb(204, 237, 36)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid  ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(204, 237, 36);"></div></a>
            <a onclick="color('rgb(197, 200, 201)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(197, 200, 201);"></div></a>
            <a onclick="color('rgb(236, 227, 17)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(236, 227, 17);"></div></a>
            <a onclick="color('rgb(255, 255, 255)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(255, 255, 255);"></div></a>
            <a onclick="color('rgb(153, 237, 17)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(153, 237, 17);"></div></a>
          </div>
        </div>
        <div class="col-lg-2" style="border: 1px  red;">
          <p style="margin-top: 1px; " class="text-center">Fondo</p>
          <div class="row">
            <a onclick="fondo('rgb(0, 0, 0)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(0, 0, 0);"></div></a>
            <a onclick="fondo('rgb(237, 48, 36)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(237, 48, 36);"></div></a>
            <a onclick="fondo('rgb(36, 177, 237)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(36, 177, 237);"></div></a>
            <a onclick="fondo('rgb(36, 237, 177)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(36, 237, 177);"></div></a>
            <a onclick="fondo('rgb(237, 36, 181)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(237, 36, 181);"></div></a>
            <a onclick="fondo('rgb(15, 189, 38)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(15, 189, 38);"></div></a>
            <a onclick="fondo('rgb(146, 251, 226)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid  ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(146, 251, 226);"></div></a>
            <a onclick="fondo('rgb(204, 237, 36)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid  ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(204, 237, 36);"></div></a>
            <a onclick="fondo('rgb(197, 200, 201)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(197, 200, 201);"></div></a>
            <a onclick="fondo('rgb(236, 227, 17)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(236, 227, 17);"></div></a>
            <a onclick="fondo('rgb(255, 255, 255)')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(255, 255, 255);"></div></a>
            <a onclick="fondo('rgb(153, 237, 17')" href="#"><div class="" style=" margin: 6px; border: 0.01em solid ; width: 25px; height:25px; border-radius: 50%; background-color:rgb(153, 237, 17);"></div></a>
          </div>
        </div>
        <div class="col-lg-1" style="border: 1px  red;">
          <p style="margin-top: 1px; " class="text-center">Continuar</p>
          <div class="row">
            <form method="post" action="{{route('carrito-add', $producto->id)}}">

              {!!csrf_field()!!}
              <!--<a href="#" onclick="extraer()">extreaer</a>-->
              <input onload="extraer()" type="hidden" id="composicion" name="compos" value="">
              <button onclick="extraer()" style="height: 40px; width: 110px; padding-top:;" type="submit" class="btn btn-success ">Guardar</button>
              <!--<a href="{{route('carrito-add', [$producto->id, ''] )}}" onclick="extraerJson()" style="height: 40px; width: 110px; padding-top:;" class="btn btn-success"><i class="fas fa-save fa-2x"></i></a>-->
            </form>
          </div>
          <div style="margin-top:5px;" class="row">
            <a href="#" style="height: 40px; width: 110px;" class="btn btn-warning">Volver</a>
          </div>
          <!--<a href="#" onclick="extraerJson()">extraer</a>-->
          <!--<a href="#" onclick="cargarJson()">cargar</a>-->
        </div>
      </div>

    </div>
  </div>
</div>
<div class="container">
  <!-- Pizarra -->
  <div class="row">
    <div class="col-lg-12" style="border: 1px  black;" align="center">
      <canvas id="pizarra" style="border: 2px solid red;"></canvas>
    </div>

  </div>
</div>

</div>


<script type = "text/javascript">

  var canvas,
    canvasWidth = 800,
    canvasHeight = 600,
    bgImage,
    canvasScale = 1,
    photoUrl = '{{"../" . $producto->portada_high}}';

$(document).ready(function ()
{
  canvas = window._canvas = new fabric.Canvas('pizarra');
  setCanvasBackgroundImageUrl(photoUrl, 0, 0, 1)
});

function setCanvasSize(canvasSizeObject)
{
  canvas.setWidth(canvasSizeObject.width);
  canvas.setHeight(canvasSizeObject.height);
}

function setCanvasBackgroundImageUrl(url)
{
  if (url && url.length > 0)
  {
    fabric.Image.fromURL(url, function (img)
    {
      bgImage = img;
      scaleAndPositionImage();
    });
  }
  else
  {
    canvas.backgroundImage = 0;
    canvas.setBackgroundImage('', canvas.renderAll.bind(canvas));

    canvas.renderAll();
  }
}

function scaleAndPositionImage()
{

  var canvasAspect = canvasWidth / canvasHeight;
  var imgAspect = bgImage.width / bgImage.height;

  if (canvasAspect <= imgAspect)
  {
    var scaleFactor = canvasWidth / bgImage.width;
  }
  else
  {
    var scaleFactor = canvasHeight / bgImage.height;
  }

  canvas.setBackgroundImage(bgImage, canvas.renderAll.bind(canvas),
  {
    scaleX: scaleFactor,
    scaleY: scaleFactor
  });

  setCanvasSize(
  {
    height: bgImage.height * scaleFactor,
    width: bgImage.width * scaleFactor
  });

  canvas.renderAll();

}


/*

function extraer(){
  var json_data = JSON.stringify(canvas.toDatalessJSON());
  document.getElementById('composicion').value = json_data;
    //document.composicion = json_data;
    //var hola = 1;
    //location.href = "route('carrito-add', [$producto->id, $compos] )}}";

    console.log(json_data);
    //console.log( json_data = {{$producto->compo}});
  }

  function cargarJson(composition){


    canvas1.loadFromJSON(composition, function(obj) {
      canvas1.renderAll();
      console.log(' this is a callback. invoked when canvas is loaded!xxx ');

      canvas1.forEachObject(function(obj){
        console.log(obj.name);
        canvas1.add(obj);
      });
    });
  }


//var composicion = {{$producto->composicion_ejemplo}};
var composicion ={};

canvas.loadFromJSON(composicion, function(obj) {
  canvas.renderAll();
  console.log(' this is a callback. invoked when canvas is loaded!xxx ');

  canvas.forEachObject(function(obj){
    console.log(obj.name);
    canvas.add(obj);
  });
});
*/

//Función añadir texto de ejemplo a la pizarra
function add()
{
  var text2 = new fabric.Textbox('TEXTO DE EJEMPLO',
  {
    width: 150,
    borderOpacityWhenMoving: 0.8,
    fontSize: 20,
    textAlign: 'center',
    left: 100,
    top: 100,
    borderColor: 'black',
    cornerColor: 'green',
    cornerSize: 6,
    transparentCorners: false,
  });
  canvas.add(text2);
  canvas.setActiveObject(text2);
}

function loadAndUse(font)
{
  if (canvas.getActiveObject())
  {
    var myfont = new FontFaceObserver(font)
    myfont.load().then(function ()
    {
      // when font is loaded, use it.
      canvas.getActiveObject().set("fontFamily", font);
      canvas.requestRenderAll();
    }).catch(function (e)
    {
      console.log(e)
      alert('font loading failed ' + font);
    });
  }
  else
  {
    var text1 = new fabric.Textbox('TEXTO DE EJEMPLO',
    {
      width: 150,
      borderOpacityWhenMoving: 0.8,
      fontSize: 20,
      textAlign: 'center',
      left: 100,
      top: 100,
      borderColor: 'black',
      cornerColor: 'green',
      fontFamily: font,
      cornerSize: 6,
      transparentCorners: false,
    });
    canvas.add(text1);
    canvas.setActiveObject(text1);
  }
}

function color(color)
{
  // when font is loaded, use it.
  canvas.getActiveObject().setColor(color);
  canvas.requestRenderAll();

  console.log(canvas.getActiveObject)
}

function fondo(color)
{
  // when font is loaded, use it.
  canvas.getActiveObject().set("backgroundColor", color);
  canvas.requestRenderAll();

  console.log(canvas.getActiveObject)
}

function align(position)
{
  // when font is loaded, use it.
  canvas.getActiveObject().set("textAlign", position);
  canvas.requestRenderAll();

  console.log(canvas.getActiveObject)
}

function italic()
{
  if (canvas.getActiveObject().get("fontStyle") == 'normal')
  {
    canvas.getActiveObject().set("fontStyle", 'italic');
  }
  else
  {
    canvas.getActiveObject().set("fontStyle", 'normal');
  }

  canvas.requestRenderAll();
}

function bold()
{
  if (canvas.getActiveObject().get("fontWeight") == 'normal')
  {
    canvas.getActiveObject().set("fontWeight", 'bold');
  }
  else
  {
    canvas.getActiveObject().set("fontWeight", 'normal');
  }
  canvas.requestRenderAll();
}

function underline()
{
  if (canvas.getActiveObject().get("underline") == false)
  {
    canvas.getActiveObject().set("underline", 'true');
  }
  else
  {
    canvas.getActiveObject().set("underline", '');
  }
  canvas.requestRenderAll();
}


function eliminar()
{
  var object = canvas.getActiveObject();
  canvas.remove(object);
}

/*

function enviar(){
console.log(this.canvas._objects[0].text);
}

var img = new Image();
img.onload = function() {
console.log("cargando");
document.getElementById('can').getContext('2d').drawImage(img, 10, 10, 100, 100);
};
img.src = '{{"../" . $producto->portada}}';*/

//canvas.add(text2);


</script>
@stop
