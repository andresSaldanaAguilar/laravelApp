<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <!--para pantallas pequeñas-->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Brand image-->
      <!--<div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
            </a>
          </div>
      </div>-->

    </div>


    @if(Auth::user())
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

           <li>
             <a href="{{route('admin.index')}}" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-home" style="color:#3170D5"></span></a>
           </li>

           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#3170D5">Usuarios <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('users.create')}}">Crear Usuario</a></li>
              <li><a href="{{route('users.index')}}">Manejar Usuarios</a></li>
            </ul>
          </li>

          <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#3170D5">Categorias <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="{{route('categories.create')}}" >Crear Categoria</a></li>
             <li><a href="{{route('categories.index')}}">Manejar Categorias</a></li>
           </ul>
         </li>

          <li><a href="#" style="color:#3170D5">Articulos</a></li>
          <li><a href="#" style="color:#3170D5">Imagenes</a></li>
          <li><a href="#" style="color:#3170D5">Tags</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#3170D5">{{ Auth::user()->name }}  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.auth.logout')}}">Salir</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    @endif
  </div><!-- /.container-fluid -->
</nav>
