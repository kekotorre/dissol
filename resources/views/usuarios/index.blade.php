@extends('layouts/layout')

@section('contenido')
  <h1>{{$usuario->name}}</h1>

  {{$usuario->direcciones}}

  <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
      Logout
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>

@stop
