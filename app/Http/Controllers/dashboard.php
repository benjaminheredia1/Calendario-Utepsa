<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboard extends Controller
{
   public function index() {
    if (Auth::check()) {
        return view('App/dashboard');
    }
    return redirect(route('login'));
   }
   public function calendario() {
    if (Auth::check()) {
        return view('App/calendario');
    }
    return redirect(route("login"));
   }
}