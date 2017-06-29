@extends('admin.template.main')

@section('title', 'Agregar articulo')

@section('panel_title', 'Agregar articulo')

@section('content')
	
	{!! Form::open(['route'=>'articles.store', 'method'=>'POST', 'files'=>true]) !!}

		<div class="form-group">
			{!! Form::label('title', 'Titulo') !!}
			{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Titulo del articulo', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id', 'Categoria') !!}
			{!! Form::select('category_id', $categories, null, ['class'=>'form-control', 'placeholder'=>'Seleccionar...', 'required']) !!}
		</div>

		<div clas="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, null, ['class'=>'form-control', 'multiple', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('image', 'Imagen') !!}
			{!! Form::file('image') !!}
		</div>

		<div class="form-group">
			<center>{!! Form::submit('Agregar articulo', ['class'=>'btn btn-primary']) !!}</center>
		</div>

	{!! Form::close() !!}
@endsection