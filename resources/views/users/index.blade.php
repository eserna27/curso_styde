@extends('layout')
@section('title', "Usuarios")
@section('content')
  <h1>
     Listado de usuarios
  </h1>
  <hr>
  <ul>
    @forelse ($users as $user)
      <li>
        {{ $user->name }} <small>({{ $user->email }})</small>
        <a href="{{ route('users.show', $user->id) }}">
          Ver detalle
        </a>
      </li>
    @empty
      <p>No hay usuarios registrados</p>
    @endforelse
  </ul>
@endsection
