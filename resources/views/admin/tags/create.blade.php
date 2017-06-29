@extends('admin.template.main')

@section('title', 'Agregar Tag')

@section('panel_title', 'Agregar Tag')

@section('content')

	{!! Form::open(['route'=>'tags.store', 'method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre del tag', 'required']) !!}
		</div>

		<div class="form-group">
			<center>{!! Form::submit("Crear", ['class'=>'btn btn-primary']) !!}</center>
		</div>

	{!! Form::close() !!}
	
@endsection