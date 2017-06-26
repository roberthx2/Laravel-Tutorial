@extends('admin.template.main')

@section('title', 'Agregar categoria')

@section('panel_title', 'Crear Categoria')

@section('content')

	{!! Form::open('route'=>'categories.store', 'method'=>'POST') !!}

	{!! Form::close() !!}
	
@endsection