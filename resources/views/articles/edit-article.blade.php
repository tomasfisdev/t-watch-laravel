@extends('layouts.main')
@section('title','Editar Artículo')
@section('content')
<section class="form-crear-editar container-md">
    <h2>Editar Artículo</h2>
    <form action="{{ route('articulos.editado', ['id' => $article->article_id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="titulo">Título <span>(Obligatorio, mínimo 2 caracteres)</span></label>
        <input type="text" name="titulo" id="titulo" @error('titulo') aria-describedby="error-titulo" @enderror value="{{old('titulo', $article->titulo)}}">
        @error('titulo')
        <p>Error: {{$message}}</p>
        @enderror
        <div class="img-preview">
            @if($article->imagen!= null)
            <img src="{{url('imgs/' . $article->imagen)}}" alt="Imágen actual">
            @else
            <p>No hay una imágen todavía</p>
            @endif
        </div>
        <label for="imagen">Imágen <span>(Obligatorio)</span></label>
        <input type="file" name="imagen" id="imagen" @error('imagen') aria-describedby="error-imagen" @enderror value="{{old('imagen')}}">
        @error('imagen')
        <p>Error: {{$message}}</p>
        @enderror
        <label for="articulo">Artículo <span>(Obligatorio, mínimo 10 caracteres)</span></label>
        <textarea name="articulo" id="articulo" @error('articulo') aria-describedby="error-articulo" @enderror>{{old('articulo', $article->articulo)}}</textarea>
        @error('articulo')
        <p>Error: {{$message}}</p>
        @enderror
        <button class="btn btn-con-fondo" type="submit">Publicar</button>
    </form>
</section>
@endsection
