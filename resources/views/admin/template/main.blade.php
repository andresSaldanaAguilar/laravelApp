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
    <!--chosen-->
    <link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
    <!--trumbwyg-->
    <link rel="stylesheet" href="{{asset('plugins/trumbowyg/ui/trumbowyg.css')}}">
    <!--fileuploader-->
    <link href="{{asset('plugins/fileinput/bootstrap-fileinput-master/css/fileinput.min.css')}}" media="all" rel="stylesheet" type="text/css">
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
  <body style="padding-top: 70px;background-color:#DBDBDB;">
    <!--navbar-->

    @include('admin.template.partials.nav')
    <!--header-->
    <div class="container" style="@yield('main-panel-size');">
      <div class="@yield('main-panel-style','panel panel-default')">
          <div class="panel-heading" style="background-color:#3170D5;">
            <ul class="nav nav-pills" >
              <li>
                <i class="fa @yield('awesome-icon') fa-4x"style="float: left;padding-right:10px;"></i>
                <h4>@yield('header')</h4>
              </li>
              <li>@yield('create-new')<li>
            </ul>
          </div>
              <!--content-->
              <div class="panel-body">
                @include('flash::message')
                @include('admin.template.partials.errors')
                @yield('content')
          </div>
      </div>
      </div>

      <div class="container panel-default" style="@yield('main-panel-size')">
        <div class="panel panel-heading">
          Saldaña Aguilar Andrés | 2017
        </div>
      </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.1.1.min.js"><\/script>')</script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('plugins/chosen/chosen.jquery.js')}}"></script>
    <script src="{{ asset('plugins/trumbowyg/trumbowyg.js')}}"></script>
    <script src="{{ asset('plugins/trumbowyg/plugins/emoji/trumbowyg.emoji.js')}}"></script>
    <script src="{{ asset('plugins/fileinput/bootstrap-fileinput-master/js/plugins/piexif.js')}}"></script>
    <script src="{{ asset('plugins/fileinput/bootstrap-fileinput-master/js/fileinput.js')}}"></script>

    @yield('js')
  <body>
</html>
