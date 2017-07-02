@extends('front.template.main')

@section('title', $article->title)

@section('content')
	<h3 class="title-front left">{{ $article->title }}</h3>
	<div class="row">
		<div class="col-md-8">
				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">{!! $article->content !!}</div>
				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-lg-offset-2">
					@foreach($article->images as $image)
						<img src="{{ asset('image/articles/'.$image->name) }}" class="pull-right img-responsive img-article" style="height: 250px;" alt="...">
					@endforeach
				</div>
		  	<hr>
		  	<div class="row container">
		  		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		  			<h4>Categoria:</h4> {{ $article->category->name }}
		  		</div>
		  		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				  	<h4>Tags: </h4>
				  	@foreach($article->tags as $tag)
				  		{{ $tag->name }}
				  	@endforeach
			  	</div>
			</div>
		  	<h3>Comentarios</h3>
		  	<hr>
		  	<div id="disqus_thread"></div>
			<script>

			/**
			*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
			/*
			var disqus_config = function () {
			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://laravel-practica.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
		</div>
		<div class="col-md-4 aside">
			@include('front.template.partials.aside')
		</div>
	</div>
@endsection