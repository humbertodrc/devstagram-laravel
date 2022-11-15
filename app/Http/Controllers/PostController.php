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
        // A la vista tambien le puedo pasar datos
        return view('dashboard', [
            'user' => $user
        ]); // dashboard es el nombre de la vista que esta en la carpeta resources/views/dashboard.blade.php
    }
}
