@foreach($articles as $article)
    <section class="card">
        <div class="card-content">
            <header class="card-header">
              	<h2 class="card-title">{{ $article->title }}</h2>
                <p>Written by {{ $article->author->name }} in Category {{ $article->category->title }} on {{ $article->publish_at? $article->publish_at->format('j F, Y'):'Not Published' }}</p>
            </header>
            <article>
                {!! $article->overview !!}
            </article>
        </div>
        <footer class="card-action right-align">
            <a href="{{ route('blog.article.show', $article->slug) }}">Read More</a>
        </footer>
    </section>
@endforeach