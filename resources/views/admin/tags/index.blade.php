@extends('admin.template.main')

@section('header','Lista de categorias')

@section('main-panel-style','panel panel-primary')

@section('create-new')
		<li style="float: right;">
			<a href="{{route('categories.create')}}" class="btn btn-success">
		  <span class="glyphicon glyphicon-plus" aria-hidden="Left-Align">
		  </span>
			</a>
		</li>
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
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->name }}</td>
						<td>
								<a href="{{route('categories.edit', $category->id)}}" class="btn btn-info">
	 							 <span class="glyphicon glyphicon-edit" aria-hidden="true">
	 							 </span>
							 </a>
								 <a href="{{route('admin.categories.destroy',$category->id)}}"
									 onclick="return confirm('Seguro que quiere eliminar al usuario {{$category->name}}?')"
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
	{!! $categories->render() !!}
@endsection
