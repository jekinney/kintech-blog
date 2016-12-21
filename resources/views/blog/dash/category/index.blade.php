@extends('layouts.dash.app')

@section('content')
	<header class="center-align">
		<h1 class="center-align">Blog Category List</h1>
		<a href="{{ route('dash.blog.category.create') }}" class="waves-effect waves-light btn">Add New Category</a>
	</header>
	<section class="row">
		@foreach($categories as $category)
			<div class="col s12 m6 l4">
				<section class="card-panel">
					<div class="card-content">
						<header>
	  						<h5>{{ $category->title }}</h5>
	  					</header>
	  					<article>
	  						<p>{{ $category->description }}</p>
	  					</article>
	  				</div>
	  				<footer class="card-action">
	  					<a href="{{ route('dash.blog.category.edit', $category->slug) }}">Edit</a>
	  					<a href="" class="right">Articles: {{ $category->articles_count }}</a>
	  				</footer>
	  			</section>
			</div>
		@endforeach
	</section>
@endsection