@extends('layouts.app')

@section('content')
@include('blog.article.partials.list')
{{ $articles->links() }}
@endsection