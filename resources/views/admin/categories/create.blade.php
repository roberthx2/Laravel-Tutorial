@extends('admin.template.main')

@section('title', 'Agregar categoria')

@section('panel_title', 'Agregar Categoria')

@section('content')

	{!! Form::open(['route'=>'categories.store', 'method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre de la categoria', 'required']) !!}
		</div>

		<div class="form-group">
			<center>{!! Form::submit("Crear", ['class'=>'btn btn-primary']) !!}</center>
		</div>

	{!! Form::close() !!}
	
@endsection