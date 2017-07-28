@extends('front.template.main')

@section('title','Posts')
@section('icon','fa-pencil-square')
@section('main-title','Bienvenido a mi blog')
@section('content')
@section('links')
  <a href="https://github.com/andresSaldanaAguilar"><i class="fa fa-github-square fa-5x"></i></a>
@endsection


    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-xs-12 col-md-9">
        <p class="pull-right visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                  @foreach($articles as $article)
                    <div class="post-preview panel" style="padding-left:30px;padding-right:30px;padding-bottom:20px;border-color:#4890E8">
                        <a href="{{ route('front.view.article',$article->slug)}}">
                            <h3 class="post-title">
                                <legend>{{$article->title}}</legend>
                            </h3></a>
                            <!--esto es porque la relacion fue definida como una a muchos XD -->
                            @foreach ($article->images as $image)
                            <img src="{{asset('images/articles/'. $image->name)}}" width="400" style="border-radius:3px">
                            @endforeach
                            <h3 class="post-meta">Categoria: <a href="#">Start Bootstrap</a> creado {{ $article->created_at->diffForHumans()}}.</h3>
                            <a class="btn btn-md btn-sprymary" style="color:white;" href="#">
                            <i class="fa fa-paper-plane fa-fw" ></i>&nbsp; Leer más</a>

                    </div>
                    <hr>
                  @endforeach
                </div>
            </div>
        </div>
      </div><!--/.col-xs-12.col-sm-9-->

     @include('front.partials.aside')

   </div>

        {!! $articles->render() !!}

@endsection
