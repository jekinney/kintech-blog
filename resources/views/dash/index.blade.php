@extends('layouts.dash.app')

@section('content')
	  <section class="row">

      	<div class="col s6 m2 offset-m2">
        	<div class="card-panel teal center-align">
          		<span class="white-text">Total Articles: {{ $articles['total'] }}</span>
        	</div>
      	</div>
		
		    <div class="col s6 m2">
        	  <div class="card-panel green center-align">
          		  <span class="white-text">Published Articles: {{ $articles['published_count'] }}</span>
        	 </div>
      	</div>
		
		    <div class="col s6 m2">
        	 <div class="card-panel green accent-4 center-align">
          		  <span class="white-text">Upcoming Articles: {{ $articles['upcoming']->count() }}</span>
        	 </div>
      	</div>

      	<div class="col s6 m2">
        	 <div class="card-panel blue center-align">
          		  <span class="white-text">Categories: {{ $categoryCount }}</span>
        	 </div>
      	</div>

    </section>

    <section class="row">

      	@include('blog.article.partials.list', ['articles' => $articles['upcoming']])
		{{ $articles['upcoming']->links() }}

    </section>
@endsection