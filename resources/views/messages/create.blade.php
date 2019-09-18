@extends('layout')

@section('contenido')
  <h1>Contactos</h1>
  <h2>Escribeme</h2>
  @if (session()->has('info'))
    {{ session('info') }}
  @else
  <form class="" action="{{route('mensajes.store')}}" method="POST">
    @csrf
      <p><label for="nombre">
        Nombre
      <input class="form-control" type="text" name="nombre" value="{{old('nombre')}}">
      {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
      </label></p>
      <p><label for="email">
          Email
        <input class="form-control" type="email" name="email" value="{{old('email')}}">
        {!!$errors->first('email','<span class=error>:message</span>')!!}
        </label></p>
      <p><label for="mensaje">
          Mensaje
        <textarea class="form-control" name="mensaje">{{old('mensaje')}}</textarea>
        {!!$errors->first('mensaje', '<span class=error>:message</span>')!!}
        </label></p>
      <input class="btn btn-primary" type="submit" name="enviar" value="Enviar">
  </form>
@endif
@stop
