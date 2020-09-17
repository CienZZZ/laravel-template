<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - Welcome</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.ico') }}" type="image/x-icon" rel="shortcut icon">

</head>

<body>
    <div class=" container">
        <div class="row">
            <h1>Welcome on our page!</h1>
        </div>
        <div class="row">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login', app()->getLocale()) }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register', app()->getLocale()) }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </div>
</body>

</html>
