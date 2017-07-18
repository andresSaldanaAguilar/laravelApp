@extends('admin.template.main')

@section('header','Lista de usuarios')

@section('main-panel-style','panel panel-primary')

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
							<a href="" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove" aria-hidden="true">
								</span></a>
								<a href="" class="btn btn-info">
	 							 <span class="glyphicon glyphicon-edit" aria-hidden="true">
	 							 </span></a>
					 </td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $users->render() !!}
@endsection
