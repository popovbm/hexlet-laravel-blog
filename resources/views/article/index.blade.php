@extends('layouts.app')

@section('content')
<h1>Список статей</h1>
<a href="{{ route('articles.create') }}">Создать</a>
@foreach ($articles as $article)
<h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a></h2>
<div>{{ Str::limit($article->body, 200) }}</div>
<a href="{{ route('articles.edit', $article->id) }}">Изменить</a>
@endforeach
@endsection
