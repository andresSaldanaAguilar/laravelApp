@extends('admin.template.main')

@section('title','Editar Usuario')

@section('main-panel-size','padding-left: 20%;padding-right: 20%;')

@section('main-panel-style','panel panel-primary')

@section('header','Editar Usuario ' . $user->name)

@section('content')
	<!-- formulario, con la ayuda de collective :) -->
	{!! Form::open(['route' => ['users.update',$user->id] , 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre Completo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo Electrónico') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			<!-- nombre, valorxdefecto,opciones del input -->
			{!! Form::select('type',[''=>'Seleccionar','member'=> 'Miembro','admin'=>'Administrador'],$user->type,
			['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Guardar Cambios',['class'=>'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}

@endsection
