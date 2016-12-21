<nav>
    <div class="nav-wrapper container">
	    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
		<a href="{{ route('home') }}"  class="brand-logo">Kintech Web Services</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
		    <li><a href="{{ route('blog.article.index') }}">Articles</a></li>
		    <li><a href="{{ route('blog.category.index') }}">Categories</a></li>
		    <li><a href="{{ route('about') }}">About</a></li>
		    @if(auth()->check())
		    	<li><a href="{{ route('logout') }}">Logout</a></li>
		    @endif
		</ul>
    </div>
</nav>