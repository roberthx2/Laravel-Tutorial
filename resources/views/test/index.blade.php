<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>{{ $article->title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>

	HOLA CODIGOFACILITO
	<br><br>

	<h1>{{ $article->title }}</h1>
	<hr>
	{{ $article->content }}
	<hr>

	{{ $article->user->name }} | {{ $article->category->name }} | 

	@foreach($article->tags as $tag)
		{{ $tag->name }}
	@endforeach

	<hr>

	@for($i = 10; $i > 0; $i--)
		{{ $i }}
	@endfor

	@if(true)
		{{ "no es false" }}
	@endif
</body>
</html>