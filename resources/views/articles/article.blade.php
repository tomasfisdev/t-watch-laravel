@extends('layouts.main')
@section('title',$article->titulo)
@section('content')
<section class="container-md articulo">
    <div class="cont-img">
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
        <img src="{{url('imgs/' . $article->imagen)}}" alt="{{$article->titulo}}">
    </div>
    <h2>{{$article->titulo}}</h2>
    <p>Fecha: {{$article->created_at->format('d/m/Y')}}</p>
    <p>{{$article->articulo}}</p>
</section>
@endsection
