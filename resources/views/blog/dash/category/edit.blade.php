@extends('layouts.dash.app')

@section('content')
	<section class="row">
		<div class="col s12 m6 offset-m3">
			<div class="card">
				<div class="card-content">

					<header class="card-title center-align">
						<h1><small>Edit category {{ $category->name }}</small></h1>
					</header>
					
					<form action="{{ route('dash.blog.category.update', $category) }}" method="post">
						<input type="hidden" name="_method" value="put">
						{{ csrf_field() }}

				  		<div class="row">
							
				  			<div class="input-field col s9">
						        <input type="text" name="title" value="{{ old('title')? old('title'):$category->title }}">
						      	<label>Title</label>
						    </div>

						    <div class="input-field col s3">
								<select name="display_order">
									@foreach(range($count, 1) as $number)
										<option value="{{ $number }}" @if(old('display_order')? old('diasplay_order'):$category->display_order == $number) selected @endif>{{ $number }}</option>
									@endforeach
								</select>
								<label>Display Order</label>
							</div>

				  		</div>

				  		<div class="input-field">
						    <textarea id="description" name="description" class="materialize-textarea">{{ old('description')? old('description'):$category->description }}</textarea>
						    <label for="description">Description</label>
						</div>


			  			<div class="card-action">
			  				<button type="submit" class="btn right">Save</button>
			  			</div>
					</form>

					<form action="{{ route('dash.blog.category.destroy', $category) }}" method="post">
		  				<input type="hidden" name="_method" value="delete">
		  				{{ csrf_field() }}
		  				<button type="submit" class="btn red darken-4">Delete</button>
		  			</form>

				</div>
			</div>
		</div>
	</section>
@endsection