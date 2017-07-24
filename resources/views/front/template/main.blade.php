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

  <body style="padding-top: 50px;background-color:#DBDBDB;">
    <!--navbar-->
    @include('admin.template.partials.nav')
    <!--header-->
          <div class="panel-heading" style="background-color:#3170D5">
            <ul class="nav nav-pills" >
              <div style="text-align:center "><h2><li style="color:white"><i class="fa fa-pencil-square fa-4x"></i></h2></li><div>
            </ul>
          </div>
              <!--content-->
              <div class="panel-body container">
                @include('flash::message')
                @include('admin.template.partials.errors')
                @yield('content')
              </div>


      <div class="container panel-default" style="@yield('main-panel-size')">
        <div class="panel panel-heading" style="background-color:white">
          Saldaña Aguilar Andrés | 2017
        </div>
      </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.1.min.js"><\/script>')</script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}"></script>

    @yield('js')
  <body>
</html>
