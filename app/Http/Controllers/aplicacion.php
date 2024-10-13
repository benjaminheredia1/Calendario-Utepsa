<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class aplicacion extends Controller
{
   public function fechas() {
    if(Auth::check()) {
    return view('App.Fechas');
   } 
   return redirect(route('login'));
}
}