<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet"  href="/css/app.css">
    <style >

   </style>
    <title>Mi sitio</title>
  </head>
  <body>
    <div class="container">

    
    <header>
      {{-- <h1>{{request()->is('/') ? 'Estas en el home' : 'No estas en el home'}}</h1> --}}
      <?php  function activeMenu($url){
        return request()->is($url) ? 'active' : '';
      } ?>


      {{-- NAVBAR INICIO  --}}
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" nav navbar-nav ">
                      <li class="nav-item">
                        <a class="nav-link " href="{{route('home') }}" tabindex="-1" aria-disabled="true">Inicio</a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="{{route('saludos','Luis Mario') }}">Saludo </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('mensajes.create')}}">Contactos</a>
                      </li>

                        @if (auth()->check())
                      <li><a class="nav-link" href="/logout">Cerrar Sesion de {{auth()->user()->name}} </a></li>
                          <li><a class="nav-link" href="{{ route('mensajes.index') }}">Mensajes</a></li>
                        @endif
                        @if (auth()->guest())
                        <a class="nav-link"  href="/login">Login</a>
                        @endif

                      {{-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li> --}}

              </ul>

          </div>
</nav>

    {{--  NAVBAR FINAL --}}
      {{-- <nav>
        <a class="{{activeMenu('/')}}"
            href="{{ route('home') }}">Inicio</a>
        <a class="{{activeMenu('saludos*')}}"
            href="{{ route('saludos','Luis Mario') }}">Saludo</a>
        <a class="{{activeMenu('mensajes*')}}"
            href="{{ route('mensajes.create') }}">Contacto</a>

        @if (auth()->check())
          <a href="/logout">Cerrar Sesion de {{auth()->user()->name}} </a>
          <a class="{{activeMenu('Mensajes')}}"
                  href="{{ route('mensajes.index') }}">Mensajes</a>
        @endif
        @if (auth()->guest())
          <a class="{{activeMenu('login')}}"
                          href="/login">Login</a>
        @endif
      </nav> --}}
    </header>
  </div>
    <div class="container">
        @yield('contenido')
      <footer>Coprygth {{date('Y')}}</footer>
    </div>
    
  </body>
</html>
