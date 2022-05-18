<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = ['nombre', 'genero', 'imagen', 'brands_id', 'descripcion', 'precio', 'estrellas'];

    public static function validation()
    {
        return  [
            'nombre' => 'required|min:2',
            'brands_id' => 'required',
            'genero' => 'required',
            'descripcion' => 'required|min:10',
            'precio' => 'required|numeric',
            'estrellas' => 'required|numeric',
        ];
    }

    public static function validationMessages()
    {
        return  [
            'nombre.required' => 'El campo de nombre no puede estar vacío',
            'nombre.min' => 'El campo de nombre debe tener mínimo 2 caracteres',
            'brands_id.required' => 'El campo de marcas no puede estar vacío',
            'genero.required' => 'El campo de genero no puede estar vacío',
            'descripcion.required' => 'El campo de descripción no puede estar vacío',
            'descripcion.min' => 'El campo de descripción debe tener mínimo 10 caracteres',
            'precio.required' => 'El campo de precio no puede estar vacío',
            'precio.numeric' => 'El campo de precio debe ser un número',
            'estrellas.required' => 'El campo de estrellas no puede estar vacío',
        ];
    }

    public function brands()
    {
        return $this->belongsTo(Brands::class, 'brands_id', 'brands_id');
    }
}
