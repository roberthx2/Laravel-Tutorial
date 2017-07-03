<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img class="img-responsive" alt="Brand" src="{{ asset('image/nav.jpg') }}">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Inicio</a></li>
      </ul>
    @if(Auth::check())
      <ul class="nav navbar-nav">
        @if(Auth::user()->admin())
        <li><a href="{{ route('users.index') }}">Usuarios</a></li>
        @endif
        <li><a href="{{ route('categories.index') }}">Categorias</a></li>
        <li><a href="{{ route('articles.index') }}">Articulos</a></li>
        <li><a href="{{ route('admin.images.index') }}">Imagenes</a></li>
        <li><a href="{{ route('tags.index') }}">Tags</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('front.index') }}" target="_blank">Pagina principal</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('logout') }}">Salir</a></li>
          </ul>
        </li>
      </ul>
      @endif

      @if(Auth::guest())
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/login"> Login </a></li>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>