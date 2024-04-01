@extends('layouts.app')

@section('title', 'Login Page - PetsApp')

@section('content')
<header>
    <img src="{{ asset('images/logo.svg') }}" alt="Logo">
</header>
<section class="login">
    <menu>
        <a href="javascript:;">Login</a>
        <a href="{{ url('register/') }}">Register</a>
    </menu>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</section>    
@endsection

@section('js')
    @if (count($errors->all()) > 0)
        @php $error = '' @endphp
        @foreach ($errors->all() as $message )
            @php $error .= '<li>' . $message . '</li>' @endphp
        @endforeach
        <script>
        $(document).ready(function () {
            Swal.fire({
                position: "top-end",
                title: "Ops!",
                html: `@php echo $error @endphp`,
                icon: "error",
                showConfirmButton: false,
                timer: 5000
            })
        })
        </script>
    @endif
@endsection