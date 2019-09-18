@extends('layout')

@section('contenido')
<h1>todos los mensajes</h1>
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Mensaje</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($messages as $message)
      <tr>
        <td>{{$message->id}}</td>
        <td>
            <a href="{{ route('mensajes.show', $message->id) }}">
            {{$message->nombre}}
            </a>
        </td>
        <td>{{$message->email}}</td>
        <td>{{$message->mensaje}}</td>
        <td>
          <a class="btn btn-info btn-xs" href="{{ route('mensajes.edit', $message->id) }}">Editar</a>
          <form  style="display:inline" class="" action="{{route('mensajes.destroy', $message->id)}}" method="post">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}  
            <button class="btn btn-danger btn-xs" type="submit" name="button">Eliminar</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop
