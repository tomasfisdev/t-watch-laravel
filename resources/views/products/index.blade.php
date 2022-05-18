@extends('layouts.main')
@section('title','Productos')
@section('content')
<section class="banner banner-chico">
    <div class="img-banner-chico-tag-heuer">

    </div>
    <div class="cont-texto-banner cont-texto-banner-chico">
        <div class="texto-banner">
            <h2>15% de descuento</h2>
            <p>En Tag Heuer Formula 1.</p>
            <a href="{{url('productos/7')}}" class="btn">Ver Más</a>
        </div>
    </div>
</section>
<section id="productos" class="container-md">
    <div class="productos-orden">
        <h2>Productos</h2>
        <div class="btns-productos">
            @auth
            @if(auth()->user()->role=="administrador")
            <a href="{{route('productos.nuevo')}}" class="btn btn-con-fondo">Crear Nuevo Producto</a>
            @endif
            @endauth
        </div>
    </div>
    <ul class="grid">
        @foreach($products as $product)
        <li class="producto">
            @auth
            @if(auth()->user()->role=="administrador")
            <div class="editar-eliminar">
                <a title="Editar producto" href="{{route('productos.editar' , ['id' => $product->product_id])}}">
                    Editar producto
                    <i class="bi bi-pencil-fill"></i>
                </a>
                <form class="form-eliminar-producto" action="{{ route('productos.eliminar' , ['id' => $product->product_id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button title="Eliminar producto" type="submit">
                        Eliminar producto
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
            </div>
            @endif
            @endauth
            <a href="{{route('productos.producto' , ['id' => $product->product_id])}}">
                <img src="{{url('imgs/' . $product->imagen)}}" alt="{{$product->marca}} {{$product->nombre}}">
                <div class="cont-productos-texto">
                    <div class="productos-texto">
                        <p>{{$product->genero}}</p>
                        <h3>{{$product->brands->nombre}} {{$product->nombre}}</h3>
                        <p>${{$product->precio}}</p>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</section>

@endsection
