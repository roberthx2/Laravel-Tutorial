@extends('admin.template.main')

@section('title', 'Lista de categorias')

@section('panel_title', 'Lista de Categorias')

@section('content')

	<a href="{{ route('categories.create') }}" class="btn btn-info"> Registrar Categoria </a><hr>
	<table class="table table-stiper"> 
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
					<td><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" arial-hidden="true"></span></a>

					<a href="{{ route('admin.categories.destroy', $category->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" onClick="return confirm('Vas a borrar?');" arial-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $categories->render() !!}

@endsection