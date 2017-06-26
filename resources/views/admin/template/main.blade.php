<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>@yield('title', 'Default') | Panel de Administración </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
	@include('admin.template.partials.nav')

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
		      	<h4 class="panel-title">@yield('panel_title', 'Default')</h4>
		    </div>
			<div class="panel-body">
				@include('admin.template.partials.errors')
				@include('flash::message')
				@yield('content', 'Default')
			</div>
		</div>
	</div>

	@include('admin.template.partials.footer')

	<script type="text/javascript" src="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>	
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>	
</body>
</html>