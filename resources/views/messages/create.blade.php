@extends('layout')

@section('contenido')
  <h1>Contactos</h1>
  <h2>Escribeme</h2>
  @if (session()->has('info'))
    {{ session('info') }}
  @else
  <form class="" action="{{route('mensajes.store')}}" method="POST">
    @csrf
      <label for="nombre">Nombre
      <input type="text" name="nombre" value="{{old('nombre')}}"><br>
      {!!$errors->first('nombre', '<span class=error>:message</span>')!!}<br>
      </label>
      <label for="email">Email
      <input type="email" name="email" value="{{old('email')}}"><br>
      {!!$errors->first('email','<span class=error>:message</span>')!!}<br>
      </label>
      <label for="mensaje">Mensaje
      <textarea name="mensaje">{{old('mensaje')}}</textarea><br>
      {!!$errors->first('mensaje', '<span class=error>:message</span>')!!}<br>
      </label>
      <input type="submit" name="enviar" value="Enviar">
  </form>
@endif
@stop
