@extends('layout')

@section('contenido')
<h1>Editar Mensaje </h1>

<form method="POST" class="" action="{{route('mensajes.update', $message->id)}}" >
  {!! method_field('PUT') !!}
  @csrf
    <label for="nombre">Nombre
    <input type="text" name="nombre" value="{{$message->nombre}}"><br>
    {!!$errors->first('nombre', '<span class=error>:message</span>')!!}<br>
    </label>
    <label for="email">Email
    <input type="email" name="email" value="{{$message->email}}"><br>
    {!!$errors->first('email','<span class=error>:message</span>')!!}<br>
    </label>
    <label for="mensaje">Mensaje
    <textarea name="mensaje">{{$message->mensaje }}</textarea><br>
    {!!$errors->first('mensaje', '<span class=error>:message</span>')!!}<br>
    </label>
    <input type="submit" name="enviar" value="Enviar">
</form>

@stop
