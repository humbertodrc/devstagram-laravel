<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function store()
    {
        // Cerrar la sesion
        auth()->logout();

        // Redireccionar al login
        return redirect()->route('login');   
    }
}
