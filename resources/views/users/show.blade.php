@extends('layout')
@section('title', "Usuario {{ $user->id }}")
@section('content')
  <p>
    <a href="{{url()->previous()}}">
      Regresar
    </a>
  </p>
  <h3>
    Mostrando detalle del usuario: #{{ $user->id }}
  </h3>
  <hr>
  <p><strong>Nombre:</strong> {{ $user->name }}</p>
  <p><strong>Correo:</strong> {{ $user->email }}</p>
@endsection
