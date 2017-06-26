@extends('admin.template.main')

@section('title', 'Editar Usuario')

@section('panel_title', 'Editar Usuario '.$user->name)

@section('content')

	{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}	

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!} 
			{!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'example@gmail.com', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Type') !!}
			{!! Form::select('type', [''=>'Seleccionar...', 'member'=>'Miembro', 'admin'=>'Administrador'], $user->type, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			<center>{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}</center>
		</div>

	{!! Form::close() !!}

@endsection