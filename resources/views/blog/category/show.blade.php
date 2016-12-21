@extends('layouts.app')

@section('content')
	<section class="card">
        <div class="card-content">
        	<header>
            	<h1 class="card-title">{{ $category->title }}</h1>
            </header>
            <article>
            	<p>{{ $category->description }}</p>
            </article>
        </div>
    </section>

    @include('blog.article.partials.list')

    {{ $articles->links() }}
@endsection