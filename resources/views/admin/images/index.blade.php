@extends('admin.template.main')
@section('title','Imagenes')
@section('header','Lista de Imagenes')
@section('awesome-icon','fa-file-image-o ')

@section('main-panel-style','panel panel-primary')

@section('content')
	<div class="row">
		@foreach ($images as $image)
			<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="/images/articles/{{ $image->name}}" class="img-responsive" style="width:400px;height:400;">
						</div>
							<div class="panel-footer">
								<label> {{$image->article->title}}</label>
							</div>
					</div>
			</div>
		@endforeach
	</div>
@endsection
