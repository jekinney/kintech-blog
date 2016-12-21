@extends('layouts.dash.app')

@section('content')
	<section class="row">
		@foreach($contacts as $contact)
			<div class="col s12">
         		<div class="card">
            		<div class="card-content">
            			<header class="card-title">
							<h5>{{ $contact->subject }} <span class="right">{{ $contact->name }} | {{ $contact->email }}</span></h5>
            			</header>
            			<article>
              				<p class="flow-text">{!! $contact->message !!}</p>
              			</article>
            		</div>
            		<div class="card-action">
              			<a href="#">@if($contact->archived) Archived @else Open @endif</a>
              			<a href="#">Read</a>
            		</div>
          		</div>
          	</div>
		@endforeach
    </section>
@endsection