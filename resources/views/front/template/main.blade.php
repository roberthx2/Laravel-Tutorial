<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Home') | Blog Facilito </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/journal/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
</head>
<body>
	<header>
		@include('front.template.partials.header')
	</header>
	<div class="container">
		@yield('content')

		<footer>
			<hr>
			Todos los derechos reservados &copy {{ date('Y') }}
			<div class="pull-right">Roberth Riera</div>
		</footer>
	</div>
<br>
	<script type="text/javascript" src="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>	
</body>
</html>