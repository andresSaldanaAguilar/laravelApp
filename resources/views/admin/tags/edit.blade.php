@extends('admin.template.main')

@section('title','Editar Categoria')

@section('main-panel-size','padding-left: 20%;padding-right: 20%;')

@section('main-panel-style','panel panel-primary')

@section('header','Editar Categoria ' . $category->name)

@section('content')
	<!-- formulario, con la ayuda de collective :) -->
	{!! Form::open(['route' => ['categories.update',$category->id] , 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Nombre de la categoria','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Guardar Cambios',['class'=>'btn btn-primary']) !!}
		</div>
		
	{!! Form::close() !!}

@endsection
