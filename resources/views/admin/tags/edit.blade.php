@extends('admin.template.main')

@section('title', 'Editar Tag')

@section('panel_title', 'Editar Tag')

@section('content')

	{!! Form::open(['route'=>['tags.update', $tag], 'method'=>'PUT']) !!}

		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $tag->name, ['class'=>'form-control', 'placeholder'=>'Nombre del tag', 'required']) !!}
		</div>

		<div class="form-group">
			<center>{!! Form::submit("Editar", ['class'=>'btn btn-primary']) !!}</center>
		</div>

	{!! Form::close() !!}
	
@endsection