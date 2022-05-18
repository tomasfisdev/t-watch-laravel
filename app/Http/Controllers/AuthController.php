<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //login
    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credenciales = $request->only(['email', 'password']);
        $request->validate(User::validationLogin(), User::validationMessagesLogin());
        if(!auth()->attempt($credenciales)) { 
            return redirect()
                ->route('auth.loginForm')
                ->withInput()
                ->with('successMessage','Credenciales incorrectas');
        }
        $user = auth()->user();
        return redirect()
            ->route('home')
            ->with('successMessage','Bienvenido ' . $user->name);
    }

    public function logout(){
        auth()->logout();
        return redirect()
            ->route('auth.loginForm');
    }

    //registro
    public function registerForm(){
        return view('auth.register');
    }
    function create(Request $request){ 
        $request->validate(User::validationRegister(), User::validationMessagesRegister());
        $input= $request->input();
        $input['password'] = Hash::make($request->input('password'));
        //por defecto el rol es de usuario común
        User::create($input);
        return redirect()
            ->route('auth.loginForm')
            ->with('successMessage','¡Cuenta creada con éxito!, iniciá sesión para ingresar' );
    }
}
