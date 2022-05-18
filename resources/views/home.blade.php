@extends('layouts.main')
@section('title','Home')
@section('content')
<section id="banner-inicial" class="banner">
    <div class="cont-texto-banner">
        <div class="texto-banner">
            <h2>Colección 2021</h2>
            <p>Qué esperas para descubrir la nueva colección de relojes 2021. !Descubrí todos los relojes!</p>
            <a class="btn btn-blanco" href="{{route('productos.index')}}">Ver Más</a>
        </div>
    </div>
</section>

<section id="beneficios" class="container-lg">
    <ul>
        <li class="beneficio">
            <i class="bi bi-globe"></i>
            <h2>Envíos a todo el mundo</h2>
            <p>Donde sea, cuando quieras.</p>
        </li>
        <li class="beneficio">
            <i class="bi bi-credit-card"></i>
            <h2>Pagos seguros</h2>
            <p>Elegí tu medio de pago favorito.</p>
        </li>
        <li class="beneficio">
            <i class="bi bi-arrow-counterclockwise"></i>
            <h2>Atención al cliente</h2>
            <p>Si no estás conforme, te devolvemos tu dinero.</p>
        </li>
    </ul>
</section>

<section class="banner banner-chico">
    <div class="img-banner-chico-rolex">

    </div>
    <div class="cont-texto-banner cont-texto-banner-chico">
        <div class="texto-banner">
            <h2>10% de descuento </h2>
            <p>En Rolex Oyster Perpetual 41.</p>
            <a href="{{url('productos/3')}}" class="btn">Ver Más</a>
        </div>
    </div>
</section>

<section id="marcas" class="container">
    <ul>
        <li>
            <div id="icono-rolex">Rolex</div>
        </li>
        <li>
            <div id="icono-citizen">Citizen</div>
        </li>
        <li>
            <div id="icono-tag-heuer">Tag Heuer</div>
        </li>
        <li>
            <div id="icono-longines">Longines</div>
        </li>
    </ul>
</section>
@endsection
