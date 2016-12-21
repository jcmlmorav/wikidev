<!DOCTYPE html>
<html lang="es">
    <head>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
      <link rel="stylesheet" href="/css/app.css">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Wikidev</title>
    </head>
    <body>
      <header>
        <div class="navbar-fixed">
          <nav class="light-blue darken-2">
            <div class="row">
              <div class="col s12 m12 l12">
                <div class="nav-wrapper">
                  <a href="{{ URL::route('overview') }}" class="brand-logo"><i class="material-icons">code</i>WikiDev</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{ URL::route('createPost') }}">Crear entrada</a></li>
                    @if (Auth::check())
                      <li><a href="{{ URL::route('profile') }}">Perfil</a></li>
                      <li><a href="{{ URL::route('logout') }}">Cerrar sesión</a></li>
                    @else
                      <li><a href="{{ URL::route('login') }}">Acceder</a></li>
                    @endif
                    <li><a href="#"><i class="material-icons">search</i></a><li>
                  </ul>
                  <ul id="slide-out" class="side-nav">
                    <li><a href="{{ URL::route('overview') }}"><i class="material-icons">code</i>WikiDev</a></li>
                    <li><div class="divider"></div></li>
                    <li><a href="#">Crear entrada</a></li>
                    @if (Auth::check())
                      <li><a href="{{ URL::route('profile') }}">Perfil</a></li>
                      <li><a href="{{ URL::route('logout') }}">Cerrar sesión</a></li>
                    @else
                      <li><a href="{{ URL::route('login') }}">Acceder</a></li>
                    @endif
                    <li><a href="#">Buscar...</a></li>
                </ul>
                <a href="javascript:;" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <div class="row">
        <div class="col m12 l8">
          @section('content')
          @show
        </div>
        <div class="col s12 m12 l4">
          <div class="section">
            <div class="collection with-header grey-text text-darken-2">
              <div class="collection-header"><h4>Categorías</h4></div>
              <a href="#!" class="collection-item orange-text text-accent-4">Wordpress</a>
              <a href="#!" class="collection-item orange-text text-accent-4">Laravel</a>
              <a href="#!" class="collection-item orange-text text-accent-4">Maquetación</a>
              <a href="#!" class="collection-item orange-text text-accent-4">Servidores</a>
            </div>
            <ul class="collection with-header grey-text text-darken-2">
              <div class="collection-header"><h4>Autores</h4></div>
              <li class="collection-item avatar">
                <img src="http://materializecss.com/images/yuna.jpg" alt="" class="circle">
                <span class="title">Juan Camilo Mora Vélez</span>
                <p>Level 0</p>
                <a href="#!" class="secondary-content orange-text text-accent-4">Ver perfil</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <footer class="page-footer grey darken-3">
        <div class="container">
          <div class="row">
            <div class="col s6 m6 l6">
              <h5 class="white-text"><i class="material-icons">code</i> WikiDev</h5>
              <p class="grey-text text-lighten-4">El banco de conocimiento colaborativo para desarrolladores</p>
            </div>
            <div class="col s6 m4 offset-m2 l4 offset-l2">
              <h5 class="white-text">Enlaces</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Categorías</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Autores</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Acerca de WikiDev</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          <!-- Please always give thanks, don't remove the following line -->
          <a class="white-text" target="_blank" href="https://github.com/jcmlmorav"><sup>code with</sup> <i class="material-icons">favorite</i> <sup>by</sup> jcmlmorav</a>
          <!-- Put your company logo or name here -->
          <!-- <a class="grey-text text-lighten-4 right" href="#!">My Company</a> -->
          </div>
        </div>
      </footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
      <script type="text/javascript" src="/js/parsley/parsley.min.js"></script>
      <script type="text/javascript" src="/js/parsley/i18n/es.js"></script>
      <script type="text/javascript">
          $('.button-collapse').sideNav({
            edge: 'left',
            closeOnClick: true
          });
          $('form').parsley();
      </script>
      @section('scripts')
      @show
    </body>
</html>
