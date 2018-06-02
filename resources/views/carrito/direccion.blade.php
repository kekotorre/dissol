@extends('layouts/layout')

@section('contenido')
@foreach (Auth::user()->direcciones as $item)
    {{$item->direccion}}
    <br />
@endforeach
@stop
