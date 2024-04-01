@extends('layouts.app')
@section('title', 'Show Pet Page - PetsApp')

@section('content')
<header class="nav level-2">
    <a href="{{ url('adoptions/create') }}">
        <img src="{{ asset('images/ico-back.svg') }}" alt="Back">
    </a>
    <img src="{{ asset('images/logo.svg') }}" alt="Logo">
    <a href="javascript:;" class="mburger">
        <img src="{{ asset('images/mburger.svg') }}" alt="Menu Burger">
    </a>
</header>
<section class="show">
    <h1>Adoption</h1>
    <img src="{{ asset('images/'.$pet->photo) }}" class="photo" alt="Photo">
    <div class="info">
        <p>{{ $pet->name }}</p>
        <p>{{ $pet->kind }}</p>
        <p>{{ $pet->weight }} Kls</p>
        <p>{{ $pet->age }} Years</p>
        <p>{{ $pet->breed }}</p>
        <p>{{ $pet->location }}</p>
    </div>
    <form action="{{ url('myadoptions/store') }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input type="hidden" name="pet_id" value="{{ $pet->id }}">
        <button class="btn">Adopt Me</button>
    </form>
</section>

@endsection