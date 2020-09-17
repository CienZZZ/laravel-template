@extends('layouts.app')

@section('title', "Welcome")

@section('content')
    <div class=" container">
        <div class="row">
            <h1>Welcome on our page!</h1>
        </div>
        
        <p>{{ __('messages.locale_test')}}</p>
    </div>
@endsection
