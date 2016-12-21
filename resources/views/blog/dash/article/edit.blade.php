@extends('layouts.dash.app')

@section('content')
	<header class="header">
		<h1>Update Article</h1>
	</header>

	<section class="row">
	
		<form action="{{ route('dash.blog.article.update') }}" method="post">
			<input type="hidden" name="id" value="{{ $article->id }}">
			<input type="hidden" name="_method" value="put">
			{{ csrf_field() }}

	  		<div class="row">

	  			<div class="input-field col s6">
			        <input type="text" name="title" value="{{ old('title')? old('title'):$article->title }}">
			      	<label>Title</label>
			    </div>

			    <div class="input-field col s4">
					<select name="category_id">
						@foreach($categories as $category)
							<option value="{{ $category->id }}" @if($article->category_id == $category->id) selected @endif>{{ $category->title }}</option>
						@endforeach
					</select>
					<label>Category</label>
				</div>
				
				<div class="input-field col s2">
					<input type="date" name="publish_date" value="{{ $article->publish_date }}"  class="datepicker">
					<label>Publish Date</label>
				</div>

			</div>

			<article-textareas overview="{{ $article->overview }}" body="{{ $article->body }}"></article-textareas>

			<div class="input-field right-align">
				<button type="submit" class="btn">Save</button>
			</div>

		</form>
	</section>
@endsection