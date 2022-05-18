<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $table = 'articles';
   protected $primaryKey = 'article_id';
   protected $fillable = ['titulo', 'imagen', 'articulo'];

   public static function validation()
   {
      return  [
         'titulo' => 'required|min:2',
         'articulo' => 'required|min:10',
      ];
   }

   public static function validationMessages()
   {
      return  [
         'titulo.required' => 'El campo de título no puede estar vacío',
         'titulo.min' => 'El campo de título debe tener mínimo 2 caracteres',
         'articulo.required' => 'El campo de artículo no puede estar vacío',
         'articulo.min' => 'El campo de artículo debe tener mínimo 10 caracteres',
      ];
   }
}
