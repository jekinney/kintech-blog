@extends('layouts.app')

@section('content')
	<section class="row">
		<div class="col s12 m8 offset-m2">
			<div class="card">
				<div class="card-content">
					<header class="center-align"> 
						<h1 class="card-title">Contact Kintech Web Services</h1>
					</header>
					
					<form action="{{ route('contact.store') }}" method="post">
						{{ csrf_field() }}
					
						<div class="row">
							<div class="input-field s12">
					        	<input type="text" 
					        		name="name" 
					        		class="validate {{ $errors->has('name')? 'invalid':''}}" 
					        		value="{{ old('name') }}" 
					        		required
					        	>
					      		<label data-error="{{ $errors->first('name') }}">Your Name</label>
					    	</div>
					    </div>
						
						<div class="row">
							<div class="input-field s12">
					        	<input type="email" 
					        		name="email" 
					        		class="validate {{ $errors->has('email')? 'invalid':''}}" 
					        		value="{{ old('email') }}"
					        	>
					      		<label data-error="{{ $errors->first('email') }}">Your Email (if you require a response)</label>
					    	</div>
					    </div>
						
						<div class="row">
							<div class="input-field s12">
					        	<input type="text" 
					        		name="subject" 
					        		class="validate {{ $errors->has('subject')? 'invalid':''}}" 
					        		value="{{ old('subject') }}"
					        		
					        	>
					      		<label data-error="{{ $errors->first('subject') }}">Subject</label>
					    	</div>
					    </div>
						
						<div class="row">
					    	<div class="input-field s12">
					        	<textarea name="message" 
					        		class="materialize-textarea"
					        		class="validate {{ $errors->has('message')? 'invalid':''}}" 
					        		required 
					        	>{{ old('message') }}</textarea>
					      		<label data-error="{{ $errors->first('message') }}">Message</label>
					    	</div>
						</div>

						<div class="input-field right-align">
	              			<button type="submit" class="btn">Submit</button>
	            		</div>

	            	</form>

				</div>
			</div>
		</div>
	</section>
@endsection