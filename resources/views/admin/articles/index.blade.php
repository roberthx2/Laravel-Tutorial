@extends('admin.template.main')

@section('title', 'Lista de articulos')

@section('panel_title', 'Lista de articulos')

@section('content')
	
	<a href="{{ route('articles.create') }}" class="btn btn-info"> Registrar Articulo </a>
	<!--BUSCADOR -->
		{!! Form::open(['route'=>'articles.index', 'method'=>'GET', 'class'=>'navbar-form pull-right']) !!}
			<div class="input-group">
				{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Buscar', 'aria-describedby'=>'search']) !!}
				<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
			</div>
		{!! Form::close() !!}	
	<!--FIN DEL BUSCADOR -->
	<hr>
	<table class="table table-stiper"> 
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>User</th>
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
						<a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" arial-hidden="true"></span></a>

						<a href="{{ route('admin.articles.destroy', $article->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" onclick="return confirm('Vas a borrar?')" arial-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<center> {!! $articles->render() !!} </center>

@endsection