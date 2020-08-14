@extends('layouts.layout')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ">
                <div class="card">
                    <h5 class="card-header text-center">Reiniciar Contraseña</h5>

                    <div class="card-body ">

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-primary">
                                            Enviar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
