@extends('layouts.app')

@section('content')
<h1>{{$article->name}}</h1>
<p>{{$article->body}}</p>
<a href="{{ route('articles.destroy', $article->id) }}" data-method="delete" rel="nofollow">Удалить</a>
@endsection
