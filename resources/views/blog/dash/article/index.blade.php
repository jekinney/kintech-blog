@extends('layouts.dash.app')

@section('content')
	<header class="header center-align">
		<h1 class="center-align">Blog Article List</h1>
	</header>
	<section>
		@foreach($articles as $article)
			<section class="card-panel">
				<div class="card-content">
					<header class="card-title">
  						<h5 class="">{{ $article->title }}</h5>
  						<p>Category: {{ $article->category->title }}</p>
  						@if(empty($article->publish_at))
  							<a href="{{ route('dash.blog.article.edit', $article->slug) }}" class="btn-flat red darken-4 white-text">Draft</a>
  						@else 
  							<p>Published on: {{ $article->publish_at->toDateString() }}</p>
  						@endif
  					</header>
  					<article>
  						{!! $article->overview !!}
  					</article>
  				</div>
  				<footer class="card-action right-align">
  					<a href="{{ route('dash.blog.article.edit', $article->slug) }}" class="btn">Edit</a>
  					<a href="{{ route('blog.article.show', $article->slug) }}" target="_blank" class="btn">Preview</a>
  				</footer>
  			</section>
		@endforeach
	</section>

	<section>
		{{ $articles->links() }}
	</section>
@endsection