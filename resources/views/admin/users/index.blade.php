@extends('admin.template.main')

@section('header','Lista de usuarios')

@section('main-panel-style','panel panel-primary')

@section('awesome-icon','fa-user-circle-o ')

@section('create-new')
		<li style="float: right;">
			<a href="{{route('users.create')}}" class="btn btn-success">
		  <span class="glyphicon glyphicon-plus" aria-hidden="Left-Align">
		  </span>
			</a>
		</li>

		<!--buscador de users-->
			{!! Form::open(['route'=>'users.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
				<div class="input-group">
					{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar usuario','aria-describedby'=>'search'])!!}
					<span class="input-group-addon" id="search">
						<span class="glyphicon glyphicon-search"></span>
					</span>
				</div>
			{!!Form::close()!!}
		<!--fin de buscador-->

@endsection

@section('content')
	<div class="panel panel-default">
		<table class="table table-striped">
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Tipo</th>
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							@if($user->type == 'admin')
									<span class="label label-primary">{{ $user->type}}</span>
							@else
									<span class="label label-info">{{ $user->type}}</span>
							@endif
						</td>
						<td>
								<a href="{{route('users.edit', $user->id)}}" class="btn btn-info">
	 							 <span class="glyphicon glyphicon-edit" aria-hidden="true">
	 							 </span>
							 </a>
								 <a href="{{route('admin.users.destroy',$user->id)}}"
									 onclick="return confirm('Seguro que quiere eliminar al usuario {{$user->name}}?')"
									 class="btn btn-danger">
									 <span class="glyphicon glyphicon-remove" aria-hidden="true">
									 </span>
								 </a>
					 </td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $users->render() !!}
@endsection
