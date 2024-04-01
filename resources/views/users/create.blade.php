@extends('layouts.app')
@section('title', 'Create User Page - PetsApp')

@section('content')
<header class="nav level-2">
    <a href="{{ url('users') }}">
        <img src="{{ asset('images/ico-back.svg') }}" alt="Back">
    </a>
    <img src="{{ asset('images/logo.svg') }}" alt="Logo">
    <a href="javascript:;" class="mburger">
        <img src="{{ asset('images/mburger.svg') }}" alt="Menu Burger">
    </a>
</header>
<section class="register create">
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <img src="{{ asset('images/ico-upload-user.svg') }}" id="upload" width="240px" alt="Upload">
        <input type="file" name="photo" id="photo" accept="image/*">
        <input type="number" name="document" placeholder="Document" value="{{ old('document') }}">
        <input type="text" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
        <select name="gender">
            <option value="">SELECT GENDER...</option>
            <option value="Female" @if(old('gender') == 'Female') selected @endif>Female</option>
            <option value="Male" @if(old('gender') == 'Male') selected @endif>Male</option>
        </select>
        <input type="date" name="birthdate" placeholder="BirthDate" value="{{ old('birthdate') }}">
        <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirmed Password">
        <button type="submit">Add</button>
    </form>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function () {
        $('#upload').click(function (e) { 
            e.preventDefault()
            $('#photo').click()
        })

        $('#photo').change(function (e) { 
            e.preventDefault();
            let reader = new FileReader()
            reader.onload = function(event) {
                $('#upload').attr('src', event.target.result)
            }
            reader.readAsDataURL(this.files[0])
        })
    })
</script>
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