@extends('layouts.app')

@section('content')
	<section class="card">
        <div class="card-content">
        	<header class="card-header">
            	<h1 class="card-title">{{ $article->title }}</h1>
                <p>Written by {{ $article->author->name }} in Category {{ $article->category->title }} on {{ $article->publish_at? $article->publish_at->format('j F, Y'):'Not Published' }}</p>
            </header>
            <article>
            	{!! $article->body !!}
            </article>
        </div>
    </section>
    
    <section class="card">
        <div class="card-content">
            <header class="card-header">
                <h1 class="card-title">Comments</h1>
            </header>
            <div class="fb-comments" data-href="{{ env('APP_URL') }}" data-width="1240" data-numposts="5"></div>
        </div>
    </section>
@endsection