@extends('layouts.main')
@section('title','Página no encontrada')
@section('content')
<section id="error-404">
<div id="img-404"></div>
<h2>Parece que esta página no existe</h2>
<a class="btn" href="{{route('home')}}">Volver al Inicio</a>
</section>
@endsection