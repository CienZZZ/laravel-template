@extends('layouts.app')

@section('title', "Welcome")

@section('content')
    <div class=" container">
        <div class="row">
        <h1>{{ __('messages.welcome_title')}}</h1>
        </div>

        <p>{{ __('messages.locale_test')}}</p>
    </div>
@endsection
