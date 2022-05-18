@extends('layouts.main')
@section('title','Editar Producto')
@section('content')
<section class="form-crear-editar container-md">
    <h2>Editar Producto</h2>
    <form action="{{ route('productos.editado', ['id' => $product->product_id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre <span>(Obligatorio , mínimo 2 caracteres)</span></label>
        <input type="text" name="nombre" id="nombre" @error('nombre') aria-describedby="error-nombre" @enderror value="{{old('nombre', $product->nombre)}}">
        @error('nombre')
        <p>Error: {{$message}}</p>
        @enderror
        <label for="marca">Marca <span>(Obligatorio)</span></label>
        <select name="brands_id" id="marca" @error('brands_id') aria-describedby="error-brands_id" @enderror value="{{old('brands_id')}}">
            <option value="">Elegí la marca...</option>
            @foreach($brands as $brand)
            <option value="{{$brand->brands_id}}" @if(old('brands_id', $product->brands_id ) == $brand->brands_id)
                selected @endif>{{$brand->nombre}}</option>
            @endforeach
        </select>
        @error('brands_id')
        <p>Error: {{$message}}</p>
        @enderror
        <label for="genero">Género <span>(Obligatorio)</span></label>
        <select name="genero" id="genero" @error('genero') aria-describedby="error-genero" @enderror value="{{old('genero', $product->genero)}}>">
            <option value="">Elegí el género...</option>
            <option @if(old('genero', $product->genero ) == "Hombre") selected @endif value="Hombre">Hombre</option>
            <option @if(old('genero', $product->genero ) == "Mujer") selected @endif value="Mujer">Mujer</option>
        </select>
        @error('genero')
        <p>Error: {{$message}}</p>
        @enderror
        <div class="img-preview">
            @if($product->imagen!= null)
            <img src="{{url('imgs/' . $product->imagen)}}" alt="Imágen actual">
            @else
            <p>No hay una imágen todavía</p>
            @endif
        </div>
        <label for="imagen">Imágen <span>(Si querés cambiar la imágen subí una nueva , sino se mantendrá la que estás
                viendo)</span></label>
        <input type="file" name="imagen" id="imagen" @error('imagen') aria-describedby="error-imagen" @enderror value="{{old('imagen')}}">
        @error('imagen')
        <p>Error: {{$message}}</p>
        @enderror
        <label for="estrellas">Estrellas <span>(Obligatorio)</span></label>
        <select name="estrellas" id="estrellas" @error('estrellas') aria-describedby="error-estrellas" @enderror value="{{old('estrellas', $product->estrellas)}}>">
            <option value="">Elegí las estrellas...</option>
            <option @if(old('estrellas', $product->estrellas ) == "1") selected @endif value="1">1</option>
            <option @if(old('estrellas', $product->estrellas ) == "2") selected @endif value="2">2</option>
            <option @if(old('estrellas', $product->estrellas ) == "3") selected @endif value="3">3</option>
            <option @if(old('estrellas', $product->estrellas ) == "4") selected @endif value="4">4</option>
            <option @if(old('estrellas', $product->estrellas ) == "5") selected @endif value="5">5</option>
        </select>
        @error('estrellas')
        <p>Error: {{$message}}</p>
        @enderror
        <label for="precio">Precio <span>(Obligatorio)</span></label>
        <input inputmode="numeric" type="text" name="precio" id="precio" @error('precio') aria-describedby="error-precio" @enderror value="{{old('precio', $product->precio)}}">
        @error('precio')
        <p>Error: {{$message}}</p>
        @enderror
        <label for="descripcion">Descripción <span>(Obligatorio , mínimo 10 caracteres)</span></label>
        <textarea name="descripcion" id="descripcion" @error('articulo') aria-describedby="error-articulo" @enderror>{{old('descripcion' , $product->descripcion)}}</textarea>
        @error('descripcion')
        <p>Error: {{$message}}</p>
        @enderror
        <button class="btn btn-con-fondo" type="submit">Publicar</button>
    </form>
</section>
@endsection
