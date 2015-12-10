@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <article>
        <h2>{{ $article->body }}</h2>
    </article>

@stop