<nav class="navbar navbar-default navbar-fixed-top" style="background-color:white">
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

    </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">

           <li>
             <a href="{{route('front.members.index')}}" role="button"><i class="fa fa-gg-circle fa-3x"style="color:#3170D5"></i></a>
           </li>

           @if(Auth::user())
           @if(Auth::user()->admin())

           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:25px;color:#3170D5">Usuarios <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{route('users.create')}}">Crear</a></li>
              <li><a href="{{route('users.index')}}">Manejar</a></li>
            </ul>
          </li>

          <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:25px;color:#3170D5">Categorias <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="{{route('categories.create')}}" >Crear</a></li>
             <li><a href="{{route('categories.index')}}">Manejar</a></li>
           </ul>
         </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:25px;color:#3170D5">Tags <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('tags.create')}}">Crear</a></li>
            <li><a href="{{route('tags.index')}}">Manejar</a></li>
          </ul>
        </li>
      @endif
      @if(Auth::user()->admin())
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:25px;color:#3170D5">Articulos <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="{{route('articles.create')}}">Crear</a></li>
           <li><a href="{{route('articles.index')}}">Manejar</a></li>
         </ul>
        </li>
        <li><a href="{{ route('images.index')}}" style="padding-top:25px;color:#3170D5">Imagenes</a></li>
        </ul>
      @else
        <li><a href="{{ route('articles.create')}}" style="padding-top:25px;color:#3170D5">Crea un articulo</a></li>
        </ul>
      @endif
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top:25px;color:#3170D5">{{ Auth::user()->name }}  <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('admin.auth.logout')}}">Salir</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    @else
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <div style="padding-top:20px;padding-right:10px;">
          <a class="btn btn-primary" href="{{route('admin.auth.login')}}" style="color:#3170D5;background-color:white;" role="button">
          <i class="fa fa-user-o "></i>&nbsp;  Inicia Sesion</a>
          </div>
        </li>
        <li>
          <div style="padding-top:20px;">
          <a class="btn btn-primary" href="{{route('users.create')}}" style="color:white;background-color:#3170D5;" role="button">
          <i class="fa fa-address-book "></i>&nbsp;  Crea una cuenta</a>
          </div>
        </li>
      </ul>
      </div><!-- /.navbar-collapse -->
    @endif
  </div><!-- /.container-fluid -->
</nav>
