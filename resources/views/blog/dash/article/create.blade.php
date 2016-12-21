@extends('layouts.dash.app')

@section('content')
	<header class="header">
		<h1>Create an Article</h1>
	</header>

	<section class="row">
	
		<form action="{{ route('dash.blog.article.store') }}" method="post">
			{{ csrf_field() }}

	  		<div class="row">

	  			<div class="input-field col s6">
			        <input type="text" name="title" value="{{ old('title') }}">
			      	<label>Title</label>
			    </div>

			    <div class="input-field col s4">
					<select name="category_id">
						@foreach($categories as $category)
							<option value="{{ $category->id }}" {{ old('category_id') == $category->id? selected:'' }}>{{ $category->title }}</option>
						@endforeach
					</select>
					<label>Category</label>
				</div>
				
				<div class="input-field col s2">
					<input type="date" name="publish_date" value="{{ old('publish_date') }}" class="datepicker">
					<label>Publish Date</label>
				</div>

			</div>

			<article-textareas overview="{{ old('overview') }}" body="{{ old('body') }}"></article-textareas>

			<div class="input-field right-align">
				<button type="submit" class="btn">Save</button>
			</div>

		</form>
	</section>
@endsection