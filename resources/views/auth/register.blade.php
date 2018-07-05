@extends('layouts.layout')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-md-10">
                <div class="card card-default">
                    <div class="card-header text-center h2">Nuevo cliente</div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="col-md-11">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email*" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="col-md-11">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña*" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-11">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña*" required>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <div class="col-md-11">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre*" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group{{ $errors->has('apellido_1') ? ' has-error' : '' }}">
                                        <div class="col-md-11">
                                            <input id="apellid_1" type="text" class="form-control" name="apellido_1" value="{{ old('apellido_1') }}" placeholder="Primer Apellido*" required autofocus>

                                            @if ($errors->has('apellido_1'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('apellido_1') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('apellido_2') ? ' has-error' : '' }}">
                                        <div class="col-md-11">
                                            <input id="apellid_2" type="text" class="form-control" name="apellido_2" value="{{ old('apellido_2') }}" placeholder="Segundo Apellido*" required autofocus>

                                            @if ($errors->has('apellido_2'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('apellido_2') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('nif') ? ' has-error' : '' }}">
                                        <div class="col-md-11">
                                            <input id="nif" type="text" class="form-control" name="nif" value="{{ old('nif') }}" placeholder="NIF" autofocus>

                                            @if ($errors->has('nif'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nif') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('movil') ? ' has-error' : '' }}">
                                        <div class="col-md-11">
                                            <input id="movil" type="text" class="form-control" name="movil" value="{{ old('movil') }}" placeholder="Movil" autofocus>

                                            @if ($errors->has('movil'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('movil') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
