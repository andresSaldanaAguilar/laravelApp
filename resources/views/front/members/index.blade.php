@extends('front.template.main')

@section('title','Posts')

@section('content')

  <div class="container">

    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-sm-9">
        <div class="jumbotron">
          <h1>Bienvenido!</h1>
          <p>Este es un blog que cree con el proposito de aprender programacion back-end y fron-tend.</p>
        </div>

        <div class="row">
          @foreach($articles as $article)
          <div class="col-xs-6 col-lg-4">
            <h2>{{$article->title}}</h2>

            <p>{{$article->content}}</p>
            <a class="btn btn-md btn-sprymary" style="background-color:#3170D5;color:white;" href="#">
              <i class="fa fa-paper-plane fa-fw" ></i>&nbsp; Leer más</a>
            <h6><i class="fa fa-clock-o fa-fw" ></i> Hace: {{ $article->created_at->diffForHumans()}}</h6>
          </div><!--/.col-xs-6.col-lg-4-->
          @endforeach
        </div><!--/row-->
      </div><!--/.col-xs-12.col-sm-9-->

      <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
        <div class="list-group">
          <a href="#" class="list-group-item active">Categorias</a>
          <a href="#" class="list-group-item"> Link <span class="badge">4</span></a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
        </div>
      </div><!--/.sidebar-offcanvas-->
    </div><!--/row-->

    <hr>

  </div><!--/.container-->

        {!! $articles->render() !!}

@endsection




<!--<div class="row">  old version
@foreach($articles as $article)
<div class="col-sm-6 col-md-6">
<div class="thumbnail">
@foreach ($article->images as $image)
<img src="{{asset('images/articles/'. $image->name)}}" alt="...">
@endforeach
<div class="caption">
<label class="label label-default">{{$article->category->name}}</label>
<h3><legend>{{$article->title}}</legend></h3>
<p>{{$article->content}}</p>
<a class="btn btn-md btn-sprymary" style="background-color:#3170D5;color:white;" href="#">
<i class="fa fa-paper-plane fa-fw" ></i>&nbsp; Leer más</a>
<h6><i class="fa fa-clock-o fa-fw" ></i> Hace: {{ $article->created_at->diffForHumans()}}</h6>
</div>
</div>
</div>
@endforeach-->
