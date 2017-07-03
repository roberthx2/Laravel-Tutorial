@extends('front.template.main')

@section('content')
	<h3 class="title-front left">{{ trans('app.title_last_articles') }}</h3>
	<h3>{{ trans('app.test', ['name'=>'Roberth']) }}</h3>
	<div class="row">
		<div class="col-md-8">
			<div class="row">

				@foreach($articles as $article)
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-body">
								<a href="{{ route('front.view.article', $article->slug) }}" class="thumbnail">
								@foreach($article->images as $image)
									<img src="{{ asset('image/articles/'.$image->name) }}" class="img-responsive img-article" alt="...">
								@endforeach
								</a>
								<a href="{{ route('front.view.article', $article->slug) }}">
									<h3 class="text-center">{{ $article->title }}</h3>
								</a>
								<hr>
								<i class="fa fa-folder-open-o"></i> <a href="{{ route('front.search.category', $article->category->name) }}">{{ $article->category->name }}</a>
								<div class="pull-right">
									<i class="fa fa-clock-o"></i> {{ $article->created_at->diffForHumans() }}
								</div>
							</div>
						</div>
					</div>
				@endForeach
			</div>
			{{ $articles->render() }}
		</div>
		<div class="col-md-4 aside">
			@include('front.template.partials.aside')
		</div>
	</div>

@endsection
