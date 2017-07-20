@extends('admin.template.main')

@section('title','Editar Tag')

@section('main-panel-size','padding-left: 20%;padding-right: 20%;')

@section('main-panel-style','panel panel-primary')

@section('header','Editar Tag ' . $tag->name)

@section('content')
	<!-- formulario, con la ayuda de collective :) -->
	{!! Form::open(['route' => ['tags.update',$tag->id] , 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::text('name',$tag->name,['class'=>'form-control','placeholder'=>'Nombrel tag','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Guardar Cambios',['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection
