@extends('layout')

@section('contenido')

<h1>Login</h1>

<form class="" action="/login" method="POST">
  {!! csrf_field() !!}
  <input type="email" name="email" placeholder="Ingrese el mail">
  <input type="password" name="password" placeholder="Ingrese el password">
  <input type="submit" name="" value="Ingresar">
</form>
<br>

@stop
