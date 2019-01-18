@extends('layout')
@section('title', "Pagina no encontrada")
@section('content')
  <p>
    <a href="{{url()->previous()}}">
      Regresar
    </a>
  </p>
  <h3>
    Pagina no encontrada
  </h3>
  <hr>
@endsection
