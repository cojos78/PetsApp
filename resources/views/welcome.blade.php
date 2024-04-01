@extends('layouts.app')

@section('title', 'Welcome Page - PetsApp')

@section('content')
<header>
    <img src="{{ asset('images/logo.svg') }}" alt="Logo">
</header>
<section class="homepage">
    <img src="{{ asset('images/slide.png') }}" alt="Slide">
    <a href="{{ url('login/') }}">Enter</a>
</section>
@endsection