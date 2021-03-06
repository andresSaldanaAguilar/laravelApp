@extends('admin.template.main')

@section('title','Login')

@section('main-panel-size','padding-left: 20%;padding-right: 20%;')

@section('main-panel-style','panel panel-primary')

@section('header','Login')

@section('content')

	<!-- formulario, con la ayuda de collective :) -->
	{!! Form::open(['route' => 'admin.auth.login' , 'method' => 'POST']) !!}
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
      {!! Form::submit('Entrar',['class'=>'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}
@endsection
