@extends('layouts.app')

@section('title', "Welcome")

@section('content')
    <div class=" container">
        <div class="row">
            <h1>Welcome on our page!</h1>
        </div>
        {{-- <div class="row">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div> --}}
        <p>{{ __('messages.locale_test')}}</p>
    </div>
@endsection
