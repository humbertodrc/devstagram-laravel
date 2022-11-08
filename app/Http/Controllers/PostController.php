<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Proteger la ruta de dashboard "se va a ejecutar antes de cualquier metodo el middleware"
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        // dd($user->username);
        return view('dashboard'); // dashboard es el nombre de la vista que esta en la carpeta resources/views/dashboard.blade.php
    }
}
