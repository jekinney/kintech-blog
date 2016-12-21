@extends('layouts.app')

@section('content')
    <div class="row">
	  @foreach($categories as $category)
        <div class="col m6">
        	  <section class="card">
                <div class="card-content">
                	  <header>
                  		  <h2 class="card-title">{{ $category->title }}</h2>
                  	</header>
                  	<article>
                  		  <p>{{ $category->description }}</p>
                  	</article>
                </div>
                <footer class="card-action right-align">
                    <span class="left">Articles: {{ $category->articles_count }}</span>
              	    <a href="{{ route('blog.category.show', $category->slug) }}">Details</a>
                </footer>
            </section>
        </div>
	  @endforeach
	  {{ $categories->links() }}
@endsection