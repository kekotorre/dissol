<html>
<head>
  <style>
    body{
      font-family: sans-serif;
    }
    @page {
      margin: 160px 50px;
    }
    header { position: fixed;
      left: 0px;
      top: -160px;
      right: 0px;
      height: 100px;
      background-color: #ddd;
      text-align: center;
    }
    header h1{
      margin: 10px 0;
    }
    header h2{
      margin: 0 0 10px 0;
    }
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
  </style>
<body>
  <header>
    <h1>Pedido a Realizar</h1>
    <h2>Dissol</h2>
  </header>
  <div class="container">
      <div class="row">
          <div class="col-lg-12">

              @foreach ($pedido as $item)
                  <h3>Datos del Cliente</h3>
                  <table class="table table-sm  ">
                      <tr><td>Cliente:</td><td>{{$item->user->name ." ". $item->user->apellido_1  ." ". $item->user->apellido_2}}</td></tr>
                      <tr><td>Telefono Móvil:</td><td>{{$item->user->movil}}</td></tr>
                      <tr><td>Telefono Fijo:</td><td>{{$item->user->fijo}}</td></tr>
                      <tr><td>Dirección de Envio</td><td>{{$item->direccion_envio}}</td></tr>
                      <tr><td></td><td></td></tr>
                  </table>
              @endforeach

              <h3>Datos del Pedido</h3>
              <table class="table table-sm" style="overflow: scroll;">
                  <thead class="table-active">
                      <tr>
                          
                          <th class="text-center" scope="col">Referencia del Producto</th>
                          <th class="text-center" scope="col">Cantidad</th>

                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($pedido as $pedido)
                          @foreach ($pedido->composicion as $item)
                              <tr>

                                  <td class="text-center">{{$item->producto->referencia}}</td>
                                  <td class="text-center">{{$item->cantidad}}</td>

                              </tr>
                          @endforeach
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <footer>
    <table>
      <tr>
        <td>
            <p class="izq">
              www.dissol.es
            </p>
        </td>
        <td>
          <p class="page">
            Página
          </p>
        </td>
      </tr>
    </table>
  </footer>
</body>
</html>
