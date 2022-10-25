<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request);
        // dd($request->get('username'));

        // Modificar el request para que el username sea unico "no es muy seguro"
        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request, [
            'name' => 'required | max:30',
            'username' => 'required | min:3 | max:30 | unique:users',
            'email' => 'required | email | max:60 | unique:users',
            'password' => 'required | min:6 | max:30 | confirmed',
            // 'password_confirmation' => 'required | same:password'
        ]);

        // dd('Creando Usuario');

        // Guardar el usuario en la base de datos
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redireccionar
        return redirect()->route('post.index');

    }
}
