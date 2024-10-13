<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class App extends Controller
{
    public function login() {
        if (Auth::check()) {    
            return 'logueados';
    }
    return view('App.login');
}
    public function loguear(Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password' => 'required|min:4|max:8'
            
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return 'logueado';
            
        }
        return redirect(route("login"))->withSuccess('Los datos introducidos no son correctos');
     
	}
    public function register() {
        if (Auth::check()) {
            return "logueado";
        }
        return view("App.register");
        
    }
    public function crear_usuario(Request $request) {
        if (!$request["password"] == $request["password2"]) {
            return redirect(route("crear"))->withSuccess('Las contraseñas deben ser iguales');
        }
        
       $request->validate([
        "name" => "required|string",
        "email" => "required|email",
        "password" => "required|min:4|max:14"
       ]);
       $credenciales = $request->only("email", "password", "name");
       User::create($credenciales);
       return redirect(route("login"));
    }
   
    }