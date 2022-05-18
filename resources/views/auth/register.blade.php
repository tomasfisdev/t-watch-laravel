@extends('layouts.main')
@section('title','Registrarse')
@section('content')
<section class="form-crear-editar container-md">
    <h2>Registrarse</h2>
    <form action="{{route('auth.create')}}" method="post">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" @error('name') aria-describedby="error-nombre" @enderror value="{{old('name')}}">
        @error('name')
        <p>Error: {{$message}}</p>
        @enderror
        <label for="email">Email</label>
        <input type="email" name="email" id="email" @error('email') aria-describedby="error-email" @enderror value="{{old('email')}}">
        @error('email')
        <p>Error: {{$message}}</p>
        @enderror
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" @error('password') aria-describedby="error-contraseña" @enderror value="{{old('password')}}">
        @error('password')
        <p>Error: {{$message}}</p>
        @enderror
        <button class="btn btn-con-fondo" type="submit">Registrarse</button>
    </form>
</section>
@endsection