@extends('admin.template.main')

@section('title','Agregar Tag')

@section('main-panel-size','padding-left: 20%;padding-right: 20%;')

@section('main-panel-style','panel panel-primary')

@section('header','Agregar un Tag')

@section('content')

	<!-- formulario, con la ayuda de collective :) -->
	{!! Form::open(['route' => 'tags.store' , 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del tag','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}

@endsection
