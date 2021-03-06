@extends('layouts.layout')

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 ">
            <div class="card">
                <h5 class="card-header text-center">Iniciar Sesión</h5>

                <div class="card-body ">
                    @if(Session::has('confirmation'))
                        <div class="alert alert-success"><h3>{{ Session::get('confirmation') }}</h3></div>
                    @endif
                        @if(Session::has('emailConfirmation'))
                            <div class="alert alert-success"><h3>{{ Session::get('emailConfirmation') }}</h3></div>
                        @endif
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <h5 class="card-header text-center">¿Cliente Nuevo?</h5>
            <div class="card-body">
              <h5 class="card-title">¿Por qué no te registras?</h5>
              <p class="card-text">Ser cliente de Dissol tiene muchas ventajas.</p>
              <a href="{{ route('register') }}" class="btn btn-primary">Registrarse</a>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
