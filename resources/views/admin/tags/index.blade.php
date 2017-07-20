@extends('admin.template.main')

@section('header','Lista de tags')

@section('main-panel-style','panel panel-default')

@section('create-new')
		<li style="float: right;">
			<a href="{{route('tags.create')}}" class="btn btn-success">
		  	<span class="glyphicon glyphicon-plus" aria-hidden="Left-Align"></span>
			</a>
		</li>
		<!--buscador de tags-->
			{!! Form::open(['route'=>'tags.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
				<div class="input-group">
					{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar tag','aria-describedby'=>'search'])!!}
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
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($tags as $tag)
					<tr>
						<td>{{ $tag->id }}</td>
						<td>{{ $tag->name }}</td>
						<td>
								<a href="{{route('tags.edit', $tag->id)}}" class="btn btn-info">
	 							 <span class="glyphicon glyphicon-edit" aria-hidden="true">
	 							 </span>
							 </a>
								 <a href="{{route('admin.tags.destroy',$tag->id)}}"
									 onclick="return confirm('Seguro que quiere eliminar al tag {{$tag->name}}?')"
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
	{!! $tags->render() !!}
@endsection
