<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexlet Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mt-4">
        <a href="/">Home</a>
        <a href="{{ route('articles.index') }}">Articles</a>
    </div>
    <div class="container mt-4">
        <div>
            @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
</body>

</html>
