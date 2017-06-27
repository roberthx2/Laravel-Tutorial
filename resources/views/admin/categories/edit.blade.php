@extends('admin.template.main')

@section('title', 'Editar categoria')

@section('panel_title', 'Editar Categoria')

@section('content')

	{!! Form::open(['route'=>['categories.update', $category], 'method'=>'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $category->name, ['class'=>'form-control', 'placeholder'=>'Nombre de la categoria', 'required']) !!}
		</div>

		<div class="form-group">
			<center>{!! Form::submit("Guardar", ['class'=>'btn btn-primary']) !!}</center>
		</div>

	{!! Form::close() !!}
	
@endsection