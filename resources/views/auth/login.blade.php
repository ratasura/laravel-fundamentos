@extends('layout')

@section('contenido')

<h1>Login</h1>

<form class="form-inline" action="/login" method="POST">
  {!! csrf_field() !!}
  <input class="form-control" type="email" name="email" placeholder="Ingrese el mail">
  <input class="form-control" type="password" name="password" placeholder="Ingrese el password">
  <input class="btn btn-primary" type="submit" name="" value="Ingresar">
</form>
<br>

@stop
