@extends('layouts.app')

@section('content')
	<section class="row">
		<div class="col s12 m6 offset-m3">
			<div class="card">
				<div class="card-content">
					<header class="center-align"> 
						<h1 class="card-title">Login</h1>
					</header>
					
					<form action="{{ route('login.store') }}" method="post">
						{{ csrf_field() }}
						
						<div class="row">
							<div class="input-field s12">
					        	<input type="email" 
					        		name="email" 
					        		class="validate {{ $errors->has('email')? 'invalid':''}}" 
					        		value="{{ old('email') }}"
					        		required
					        	>
					      		<label data-error="{{ $errors->first('email') }}">Email</label>
					    	</div>
					    </div>
						
						<div class="row">
							<div class="input-field s12">
					        	<input type="password" 
					        		name="password" 
					        		class="validate {{ $errors->has('password')? 'invalid':''}}" 
					        		value="{{ old('password') }}"
					        		
					        	>
					      		<label data-error="{{ $errors->first('password') }}">Password</label>
					    	</div>
					    </div>

						<div class="input-field right-align">
	              			<button type="submit" class="btn">Login</button>
	            		</div>

	            	</form>

				</div>
			</div>
		</div>
	</section>
@endsection