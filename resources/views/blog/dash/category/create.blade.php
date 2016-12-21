@extends('layouts.dash.app')

@section('content')
	<section class="row">
		<div class="col s12 m6 offset-m3">
			<div class="card">
				<div class="card-content">

				<header class="card-title center-align">
					<h1><small>Create a new category</small></h1>
				</header>

				<form action="{{ route('dash.blog.category.store') }}" method="post">
					{{ csrf_field() }}

			  		<div class="row">

			  			<div class="input-field col s9">
					        <input type="text" name="title" value="{{ old('title') }}">
					      	<label>Title</label>
					    </div>

					    <div class="input-field col s3">
							<select name="display_order">
								@foreach(range($count, 1) as $number)
									<option value="{{ $number }}" {{ old('display_order') == $number? selected:'' }}>{{ $number }}</option>
								@endforeach
							</select>
							<label>Display Order</label>
						</div>

			  		</div>

			  		<div class="input-field">
					    <textarea id="description" name="description" class="materialize-textarea">{{ old('description') }}</textarea>
					    <label for="description">Description</label>
					</div>

			  		<div class="input-field right-align">
			  			<button type="submit" class="btn">Save</button>
			  		</div>

				</div>
			</form>
		</div>
	</section>
@endsection