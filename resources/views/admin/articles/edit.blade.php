@extends('admin.template.main')

@section('title', 'Editar articulo')

@section('panel_title', 'Editar articulo - '.$article->title)

@section('content')
	
	{!! Form::open(['route'=>['articles.update', $article], 'method'=>'PUT', 'files'=>true]) !!}

		<div class="form-group">
			{!! Form::label('title', 'Titulo') !!}
			{!! Form::text('title', $article->title, ['class'=>'form-control', 'placeholder'=>'Titulo del articulo', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id', 'Categoria') !!}
			{!! Form::select('category_id', $categories, $article->category->id, ['class'=>'form-control', 'placeholder'=>'Seleccionar...', 'required']) !!}
		</div>

		<div clas="form-group">
			{!! Form::label('content', 'Contenido') !!}
			{!! Form::textarea('content', $article->content, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags[]', $tags, $my_tag, ['class'=>'form-control', 'multiple', 'required']) !!}
		</div>

		<div class="form-group">
			<center>{!! Form::submit('Editar articulo', ['class'=>'btn btn-primary']) !!}</center>
		</div>

	{!! Form::close() !!}

@endsection