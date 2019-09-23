<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"  href="/css/app.css">
  <title>Mi sitio</title>
</head>
<body>
  <div class="container">
    <header>
      <?php  function activeMenu($url){
        return request()->is($url) ? 'active' : '';
      } ?>
      <nav id="barra1" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div id="my-nav" class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
						<li class="nav-item">
                        <a class="nav-link " href="{{route('home') }}" tabindex="-1" aria-disabled="true">Inicio</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="{{route('saludos','Luis Mario') }}">Saludo </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('mensajes.create')}}">Contactos</a>
                      </li>
            @if (auth()->check())
            <li><a class="nav-link" href="{{ route('mensajes.index') }}">Mensajes</a></li>
            @endif
           </ul>
           <ul class="nav navbar-nav ml-auto">
                        @if (auth()->guest())
                          <li><a class="nav-link" href="/login">Login</a></li> 
                        @else
                          <li><a class="nav-link" href="/logout">Cerrar Sesion de {{auth()->user()->name}} </a></li>
                          
                        @endif 

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
           </ul>
        </div>
      </nav>
    </header>
  </div>
  <div class="container">
    @yield('contenido')
  <footer>Coprygth {{date('Y')}}</footer>
  <script src="js/all.js">
  </script>
</div>  
</body>
</html>