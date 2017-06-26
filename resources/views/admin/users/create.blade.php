@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('panel_title', 'Crear Usuario')

@section('content')

	{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}	

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!} 
			{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('passwoord', 'Contraseña') !!}
			{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'***********', 'requeired']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Type') !!}
			{!! Form::select('type', [''=>'Seleccionar...', 'member'=>'Miembro', 'admin'=>'Administrador'], '', ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			<center>{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}</center>
		</div>

	{!! Form::close() !!}

@endsection