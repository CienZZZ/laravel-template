<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }} - @yield('title')</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('favicon.png') }}" type="image/x-icon" rel="shortcut icon">
    </head>
    <body>
        <header>
        </header>
        <main class="container">
            @yield('content')
        </main>
        <footer>

        </footer>
    </body>
</html>
