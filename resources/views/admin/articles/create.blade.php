@extends('admin.template.main')

@section('title','Crear Articulo')

@section('main-panel-size','padding-left: 20%;padding-right: 20%;')

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
			{!! Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'=>'Seleccionar categoria','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content','Contenido') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::textarea('content',null,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags','Tags') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::select('tags',$tags,null,['class'=>'form-control','multiple','required']) !!}
		</div>

	{!! Form::close() !!}

@endsection
