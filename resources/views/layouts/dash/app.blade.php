<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Kintech-Dashboard</title>

		<link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</head>
	<body>
		<div id="app">
			@include('layouts.partials.nav')
  			<ul id="slide-out" class="side-nav">
  				<li><a href="{{ route('dash.index') }}">Dashboard</a></li>
	    		<li><a href="{{ route('dash.blog.category.index') }}">Categories</a></li>
				<li><a href="{{ route('dash.blog.article.index') }}">Articles</a></li>
				<li><a href="{{ route('dash.blog.article.create') }}">Create Article</a></li>
				<li><a href="{{ route('dash.contact.index') }}">Contact</a></li>
  			</ul>
  			<a role="button" data-activates="slide-out" class="button-collapse btn">menu</a>
			<main class="container">
				@yield('content')
			</main>
		</div>

		<script src="/js/app.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
		<script>
			$(function() {
				$(".button-collapse").sideNav();
			});
			$(function() {
				$("select").material_select();
			});
			$(function() {
				$('.datepicker').pickadate({
    				selectMonths: true,
    				selectYears: 2
  				});
			});
		</script>
	</body>
</html>