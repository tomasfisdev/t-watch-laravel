@extends('layouts.main')
@section('title','Artículos')
@section('content')
<section id="articulos" class="container-md">
    <div class="productos-orden">
        <h2>Artículos</h2>
        @auth
        @if(auth()->user()->role=="administrador")
        <a href="{{route('articulos.nuevo')}}" class="btn btn-con-fondo">Crear Nuevo Artículo</a>
        @endif
        @endauth
    </div>
    <ul class="grid">
        @foreach($articles as $article)
        <li class="producto">
            @auth
            @if(auth()->user()->role=="administrador")
            <div class="editar-eliminar">
                <a title="Editar artículo" href="{{route('articulos.editar' , ['id' => $article->article_id])}}">
                    Editar artículo
                    <i class="bi bi-pencil-fill"></i>
                </a>
                <form class="form-eliminar-articulo" action="{{ route('articulos.eliminar' , ['id' => $article->article_id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button title="Eliminar artículo" type="submit">
                        Eliminar artículo
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
            </div>
            @endif
            @endauth
            <a href="{{route('articulos.articulo' , ['id' => $article->article_id])}}">
                <img src="{{url('imgs/' . $article->imagen)}}" alt="{{$article->titulo}}">
                <div class="cont-productos-texto">
                    <div class="productos-texto">
                        <p>{{$article->created_at->format('d/m/Y')}}</p>
                        <h3>{{$article->titulo}}</h3>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</section>
@endsection
