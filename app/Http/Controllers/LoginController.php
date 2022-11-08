<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    // Metodo para guardar la data cuando se hace el login
    public function store(Request $request)
    {
        // Validar los datos
        $this->validate($request, [
            'email' => 'required | email ',
            'password' => 'required',
        ]);

        // Comprobar si las credenciales son correctas, $request->remember es para recordar la sesion
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return  redirect()->route('post.index');

    }
}
