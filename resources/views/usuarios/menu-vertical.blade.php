<div class="col-3">
    <ul class="nav flex-column">
        <li class="nav-item"  style="border-bottom: 1px solid grey">
            <a class="nav-link" href="#">Mis Pedidos</a>
        </li>

        <li class="nav-item" style="border-bottom: 1px solid grey">
            <a class="nav-link active" href="{{route('datos-personales')}}">Datos Personales</a>
        </li>
        <li class="nav-item"  style="border-bottom: 1px solid grey">
            <a class="nav-link" href="{{route('datos_entrega')}}">Datos de Entrega</a>
        </li>
        <li class="nav-item"  style="border-bottom: 1px solid grey">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Salir</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</div>
