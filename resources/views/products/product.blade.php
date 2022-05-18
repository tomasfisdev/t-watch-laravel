@extends('layouts.main')
@section('title',$product->brands->nombre . " " . $product->nombre)
@section('content')
<section id="detalle">
    <div class="cont-img">
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
        <img src="{{url('imgs/' . $product->imagen)}}" alt="{{$product->marca}} {{$product->nombre}}">
    </div>
    <div class="texto-detalle">
        <p>{{$product->genero}}</p>
        <h2>{{$product->brands->nombre}} {{$product->nombre}}</h2>
        <p>${{$product->precio}}</p>
        <div class="estrellas">
            @for($i = 1; $i <= $product['estrellas']; $i++) <i class="bi bi-star-fill"></i>
                @endfor
        </div>
        <p>{{$product->descripcion}}</p>
        <div class="btns-block">
            <div class="btns-flex">
                <select name="cantidad" id="cantidad">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <button class="btn añadir">Añadir al Carrito</button>
            </div>
            <button class="btn btn-con-fondo">Comprar</button>
        </div>
    </div>
</section>
@endsection
