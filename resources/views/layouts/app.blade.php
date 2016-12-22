<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Kintech Web Services</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ elixir('css/materialize.css') }}" rel="stylesheet">
	</head>
	<body>
    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=528914913956618";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
		<header>
			@include('layouts.partials.nav')
		</header>
		<main class="container">
			<div id="app">
				@yield('content')
			</div>
		</main>
		<footer class="page-footer">
      		<div class="container">
        		<div class="row">
          			<div class="col l6 s12">
            			<h5 class="white-text">Kintech Web Services</h5>
            			<p class="grey-text text-lighten-4"></p>
          			</div>
          			<div class="col l4 offset-l2 s12">
            			<h5 class="white-text">Menu</h5>
            			<ul>
              				<li><a class="grey-text text-lighten-3" href="{{ route('home') }}">Home</a></li>
		                  	<li><a class="grey-text text-lighten-3" href="{{ route('blog.article.index') }}">Articles</a></li>
		                  	<li><a class="grey-text text-lighten-3" href="{{ route('blog.category.index') }}">Categories</a></li>
		                  	<li><a class="grey-text text-lighten-3" href="{{ route('about') }}">About</a></li>
		                  	<li><a class="grey-text text-lighten-3" href="{{ route('contact') }}">Contact</a></li>
            			</ul>
          			</div>
        		</div>
      		</div>
      		<div class="footer-copyright">
        		<div class="container">
        			© 2017 Copyright Kintech Web Services
        			<a class="grey-text text-lighten-4 right" href="{{ route('login') }}">Author Login</a>
        		</div>
      		</div>
    	</footer>
		<script src="{{ elixir('/js/all.js') }}"></script>
	</body>
</html>