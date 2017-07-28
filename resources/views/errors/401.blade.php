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
    <div style="color:grey;text-align:center;">
      <p style="font-size:300%;">Acceso Restringido<p>
      <p style="text-align:center;"><i class="fa fa-lock fa-5x" aria-hidden="true"></i></p>
      <a class="btn btn-lg btn-success" href="{{route('front.members.index')}}">
      Volver a pagina principal</a>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.1.min.js"><\/script>')</script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}"></script>
    <script src="{{ asset('customjs/offcanvas.js')}}"></script>
    @yield('js')
  <body>
</html>
