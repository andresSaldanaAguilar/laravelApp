<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Default') | Panel de administracion</title>
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
    <!--flash-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body style="padding-top: 70px;background-color:#DBDBDB;">
    <!--navbar-->

    @include('admin.template.partials.nav')
    <!--header-->
    <div class="container" style="@yield('main-panel-size');">
      <div class="@yield('main-panel-style','panel panel-default')">
          <div class="panel-heading" style="background-color:#5E8DC6;">
            <ul class="nav nav-pills" >
              <li><h4>@yield('header')</h4></li>
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

    <script src="{{ asset('plugins/jquery/js/jquery-3.2.1.slim.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

  <body>
</html>
