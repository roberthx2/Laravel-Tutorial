@extends('admin.template.main')

@section('title', 'Lista de Tags')

@section('panel_title', 'Lista de Tags')

@section('content')
	
	<a href="{{ route('tags.create') }}" class="btn btn-info"> Registrar Tag </a>

	<!--BUSCADOR -->
		{!! Form::open(['route'=>'tags.index', 'method'=>'GET', 'class'=>'navbar-form pull-right']) !!}
			<div class="input-group">
				{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Buscar', 'aria-describedby'=>'search']) !!}
				<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
			</div>
		{!! Form::close() !!}	
	<!--FIN DEL BUSCADOR -->
	<hr>
	<table class="table table-stiper"> 
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
					<td><a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" arial-hidden="true"></span></a>

					<a href="{{ route('admin.tags.destroy', $tag->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" onClick="return confirm('Vas a borrar?');" arial-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<center> {!! $tags->render() !!} </center>

@endsection