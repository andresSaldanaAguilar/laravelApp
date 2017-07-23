@extends('admin.template.main')

@section('header','Lista de Imagenes')

@section('main-panel-style','panel panel-primary')

@section('content')
	<div class="row">
		@foreach ($images as $image)
			<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<img src="/images/articles/{{ $image->name}}" class="img-responsive">
						</div>
							<div class="panel-footer">
								<label> {{$image->article->title}}</label>
							</div>
					</div>
			</div>
		@endforeach
	</div>
@endsection
