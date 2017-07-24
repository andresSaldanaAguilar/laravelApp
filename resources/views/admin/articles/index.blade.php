@extends('admin.template.main')

@section('header','Lista de Articulos')

@section('main-panel-style','panel panel-primary')
@section('awesome-icon','fa-bold')

@section('create-new')
		<li style="float: right;">
			<a href="{{route('articles.create')}}" class="btn btn-success">
		  <span class="glyphicon glyphicon-plus" aria-hidden="Left-Align">
		  </span>
			</a>
		</li>

			{!! Form::open(['route'=>'articles.index','method'=>'GET','class'=>'navbar-form pull-right'])!!}
			<!--buscador de articles-->
				<div class="input-group">
					{!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Buscar articulo','aria-describedby'=>'search'])!!}
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
				<th>Titulo</th>
				<th>Categoria</th>
				<th>Usuario</th>
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($articles as $article)
					<tr>
						<td>{{ $article->id }}</td>
						<td>{{ $article->title }}</td>
						<td>{{ $article->category->name }}</td>
						<td>{{ $article->user->name }}</td>
						<td>
								<a href="{{route('articles.edit', $article->id)}}" class="btn btn-info">
	 							 <span class="glyphicon glyphicon-edit" aria-hidden="true">
	 							 </span>
							 </a>
								 <a href="{{route('admin.articles.destroy',$article->id)}}"
									 onclick="return confirm('Seguro que quiere eliminar al articulo {{$article->name}}?')"
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
	{!! $articles->render() !!}
@endsection
