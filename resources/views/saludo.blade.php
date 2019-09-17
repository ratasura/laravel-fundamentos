@extends('layout')


@section('contenido')
<h1>Saludos {{$nombre}}</h1>
<li>
  @forelse ($consolas as $consola)
    <ul>
      {{$consola}}
    </ul>
  @empty
    <p>no hay elemento que mostrar</p>
  @endforelse
</li>


@stop
