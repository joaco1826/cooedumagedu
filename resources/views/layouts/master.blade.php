<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset("img/favicon-06.png") }}">
    <link rel="stylesheet" href="{{ mix("css/app.css") }}">
    @yield('style')
</head>
<body>
@component('components.header')
@endcomponent
@yield('content')
@component('components.footer')
@endcomponent
<script src="{{ mix("js/app.js") }}"></script>
@yield('script')
</body>
</html>
