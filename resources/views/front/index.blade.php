@extends('front.template.main')

@section('content')
	<h3 class="title-front left">Ultimos Articulos</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="#" class="thumbnail">
								<img src="{{ asset('image/php.jpg') }}" class="img-responsive img-article" alt="...">
							</a>
							<h3 class="text-center">Titulo de este nuevo articulo veamos si es largo</h3>
							<hr>
							<i class="fa fa-folder-open-o"></i> <a href="">Category</a>
							<div class="pull-right">
								<i class="fa fa-clock-o"></i> Hace 3 minutos
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<a href="#" class="thumbnail">
								<img src="{{ asset('image/laravel.png') }}" class="img-responsive img-article" alt="...">
							</a>
							<h3 class="text-center">Framewoork Laravel 5.4</h3>
							<hr>
							<i class="fa fa-folder-open-o"></i> <a href="">Category</a>
							<div class="pull-right">
								<i class="fa fa-clock-o"></i> Hace 12 minutos
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 aside">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Categorias</h3>
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
							<span class="badge">14</span>
							Noticias
						</li>
						<li class="list-group-item">
							<span class="badge">2</span>
							Promocions
						</li>
						<li class="list-group-item">
							<span class="badge">60</span>
							Comentarios
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

@endsection
