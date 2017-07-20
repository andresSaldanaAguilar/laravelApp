@extends('admin.template.main')

@section('title','Crear Usuario')

@section('main-panel-size','padding-left: 20%;padding-right: 20%;')

@section('main-panel-style','panel panel-primary')

@section('header','Crear un Usuario')

@section('content')

	<!-- formulario, con la ayuda de collective :) -->
	{!! Form::open(['route' => 'users.store' , 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Completo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo Electrónico') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::password('password',['class'=>'form-control','placeholder'=>'***************','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::select('type',[''=>'Seleccionar','member'=> 'Miembro','admin'=>'Administrador'],null,
			['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection
