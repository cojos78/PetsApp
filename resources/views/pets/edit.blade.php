@extends('layouts.app')
@section('title', 'Edit Pet Page - PetsApp')

@section('content')
<header class="nav level-2">
    <a href="{{ route('dashboard') }}">
        <img src="{{ asset('images/ico-back.svg') }} " width="50" alt="Back">
    </a>
    <img src="{{ asset('images/logo.svg') }}" width="200" alt="Logo">
    <a href="javascript:;" class="mburger">
        <img src="{{ asset('images/mburger.svg') }}" alt="Menu Burger">
    </a>
</header>
<section class="register create">
    <form action="{{ url('pets/'.$pet->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="hidden" name="photoactual" value="{{ $pet->photo }}">
        <img src="{{ asset('images/'.$pet->photo) }}" id="upload" width="240px" alt="Upload">
        <input type="file" name="photo" id="photo" accept="image/*">
        <input type="text" name="name" placeholder="Name" value="{{ old('name', $pet->name) }}">    
        <input type="" name="kind" placeholder="Kind" value="{{ old('kind', $pet->kind) }}">
        <input type="text" name="weight" placeholder="Weight" value="{{ old('weight', $pet->weight) }}">
        <input type="" name="age" placeholder="Age" value="{{ old('age', $pet->age) }}">
        <input type="" name="breed" placeholder="Breed" value="{{ old('breed', $pet->breed) }}">
        <input type="" name="location" placeholder="Location" value="{{ old('location', $pet->location) }}">
        <button type="submit">Edit</button>
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