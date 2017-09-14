<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bulma.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>

<header>
    <select class="github-ajax"></select>
</header>

<div>
    @yield('content')
</div>

<footer>
    Сегодня: <b>{{ \Carbon\Carbon::now()->format('d-m-Y') }}</b>
</footer>

<script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('/js/select2.min.js') }}"></script>
<script src="{{ asset('/js/app.js') }}"></script>
@stack('scripts')
</body>
</html>