@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('panel_title', 'Lista de Usuarios')

@section('content')
	<a href="{{ route('users.create') }}" class="btn btn-info"> Registrar Usuario </a><hr>
	<table class="table table-stiper"> 
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Correo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->type == "admin")
							<span class="label label-danger">{{ $user->type }}</td></span>
						@else
							<span class="label label-primary">{{ $user->type }}</td></span>
						@endif
					<td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" arial-hidden="true"></span></a>

					<a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" onclick="return confirm('Vas a borrar?')" arial-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $users->render() !!}

@endsection