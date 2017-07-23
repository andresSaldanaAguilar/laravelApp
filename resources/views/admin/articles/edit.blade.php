@extends('admin.template.main')

@section('title','Editar Articulo')

@section('main-panel-style','panel panel-primary')

@section('header','Editar Articulo ' .$article->title)

@section('content')

	<!-- formulario, con la ayuda de collective :)	edit lleva el parametro!! -->
	{!! Form::open(['route' => ['articles.update',$article->id] , 'method' => 'PUT','files'=>true]) !!}
		<div class="form-group">
			{!! Form::label('title','Titulo') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::text('title',$article->title,['class'=>'form-control','placeholder'=>'Titulo del articulo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id','Categoria') !!}
			<!-- categories lista las categorias, el sig. argumento nos trae el valor que ya tenia -->
			{!! Form::select('category_id',$categories,$article->category->id,['class'=>'form-control select-category','placeholder'=>'Seleccionar categoria','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content','Contenido') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::textarea('content',$article->content,['class'=>'form-control textarea-content','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags','Tags') !!}
			<!-- los corhetes indican que enviaremos un ARREGLO de tags -->
			{!! Form::select('tags[]',$tags,$article->tags,['class'=>'form-control select-tag','multiple','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar Articulo',['class'=>'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}

@endsection

@section('js')
<script>
	$('.select-tag').chosen({
		placeholder_text_multiple:'Seleccionar tags (3 maximo)',
		max_selected_options:3,
		no_results_text: 'Oops, al parecer no hay concidencias para '
	});

	$('.select-category').chosen({
		placeholder_text_single:'Seleccionar categoria',
		no_results_text: 'Oops, al parecer no hay concidencias para '
	});

	$('.textarea-content').trumbowyg({
		lang: 'es',
	});

</script>
@endsection
