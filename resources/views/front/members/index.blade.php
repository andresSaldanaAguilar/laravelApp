@extends('front.template.main')

@section('title','Posts')

@section('content')

        <div class="row">
        	@foreach($articles as $article)
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                @foreach ($article->images as $image)
                <img src="{{asset('images/articles/'. $image->name)}}" alt="...">
                @endforeach
                <div class="caption">
                  <h3><legend>{{$article->title}}</legend></h3>
                  <h6>{{$article->category->name}}  || Hace: {{ $article->created_at->diffForHumans()}}</h6>
                  <p>{{$article->content}}</p>
                  <a class="btn btn-md btn-sprymary" style="background-color:#3170D5;color:white;" href="#">
                    <i class="fa fa-paper-plane fa-fw" ></i>&nbsp; Leer más</a>
                </div>
              </div>
            </div>
        	@endforeach
        </div>

        {!! $articles->render() !!}

@endsection
