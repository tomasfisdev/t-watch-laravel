<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends \Illuminate\Foundation\Auth\User
{
   use Notifiable;
   protected $table = "users";
   protected $primaryKey = "usuario_id";
   protected $fillable = ['email', 'password', 'name'];

   public static function validationLogin()
   {
      return  [
         'email' => 'required',
         'password' => 'required',
      ];
   }

   public static function validationMessagesLogin()
   {
      return  [
         'email.required' => 'El campo de email no puede estar vacío',
         'password.required' => 'El campo de contraseña no puede estar vacío',
      ];
   }

   public static function validationRegister()
   {
      return  [
         'name' => 'required',
         'email' => 'required',
         'password' => 'required',
      ];
   }

   public static function validationMessagesRegister()
   {
      return  [
         'name.required' => 'El campo de nombre no puede estar vacío',
         'email.required' => 'El campo de email no puede estar vacío',
         'password.required' => 'El campo de contraseña no puede estar vacío',
      ];
   }
}
