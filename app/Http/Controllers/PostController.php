<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Proteger la ruta de dashboard "se va a ejecutar antes de cualquier metodo el middleware"
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard'); // dashboard es el nombre de la vista que esta en la carpeta resources/views/dashboard.blade.php
    }
}
