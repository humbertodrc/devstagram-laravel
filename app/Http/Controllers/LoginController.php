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
        $this->validate($request, [
            'email' => 'required | email ',
            'password' => 'required',
    ]);
    }
}
