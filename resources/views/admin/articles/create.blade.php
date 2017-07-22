@extends('admin.template.main')

@section('title','Crear Articulo')

@section('main-panel-style','panel panel-primary')

@section('header','Crear un Articulo')

@section('content')

	<!-- formulario, con la ayuda de collective :)
		files:true -> para poder almacenar imagenes
	-->
	{!! Form::open(['route' => 'articles.store' , 'method' => 'POST','files'=>true]) !!}
		<div class="form-group">
			{!! Form::label('title','Titulo') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Titulo del articulo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id','Categoria') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::select('category_id',$categories,null,['class'=>'form-control select-category','placeholder'=>'Seleccionar categoria','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content','Contenido') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::textarea('content',null,['class'=>'form-control textarea-content','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags','Tags') !!}
			<!-- los corhetes indican que enviaremos un ARREGLO de tags -->
			{!! Form::select('tags[]',$tags,null,['class'=>'form-control select-tag','multiple','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('image','Imagen')!!}
			{!! Form::file('image')!!}
		</div

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
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
		lang: 'es'
	});
</script>
@endsection
