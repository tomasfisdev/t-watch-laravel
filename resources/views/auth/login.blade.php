@extends('layouts.main')
@section('title','Iniciar Sesión')
@section('content')
<section class="form-crear-editar container-md">
    <h2>Iniciar Sesión</h2>
    <form action="{{route('auth.login')}}" method="post">
        @csrf
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
        <button class="btn btn-con-fondo" type="submit">Iniciar Sesión</button>
    </form>
</section>
@endsection