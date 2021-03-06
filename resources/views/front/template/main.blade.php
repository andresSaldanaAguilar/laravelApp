<!DOCTYPE html>
<html lang="en" style="background-color:#DBDBDB;">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Default') | Panel de administracion</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <!--flash-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--custom css-->
    <link rel="stylesheet" href="{{asset('customcss/offcanvas.css')}}">

  </head>

  <style>
      html, body {
          background-color: #323232;
          color: #232323;
          font-family: 'Raleway', sans-serif;
          font-weight: 100;
          height: 100vh;
          margin: 0;
      }
    </style>

  <body style="padding-top:68px;background-color:white">
    <!--navbar-->
    @include('admin.template.partials.nav')
    <!--header-->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{asset('images/home.jpg')}}');height:600px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                      <div class="panel-heading">
                        <ul class="nav nav-pills">
                          <div style="text-align:center "><h2><li style="color:white"><i class="fa @yield('icon') fa-5x"></i></h2></li></div>
                        </ul>
                      </div>
                        <h1 style="color:white;font-size:550%;text-align:center">@yield('main-title')</h1>
                        <div style="text-align:center">
                          @yield('links')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--content-->
    <div class="panel-body container">
        </br></br>
        @yield('content')
    </div>


      <footer class="container-fluid"style="background-image: url('{{asset('images/home.jpg')}}');height:80px;color:black">
          <h4> Saldaña Aguilar Andrés || 2017 </h4>
      </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.1.min.js"><\/script>')</script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}"></script>
    <script src="{{ asset('customjs/offcanvas.js')}}"></script>
    @yield('js')
  <body>
</html>
