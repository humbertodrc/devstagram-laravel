@extends('layouts.app')

@section('titulo')
    Inicia en DevStagram
@endsection

@section('contenido')
    {{-- Imagen Principal --}}
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="Imagen login de usuarios">
        </div>
        {{-- Formulario --}}
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{route('login')}}" novalidate>
                @csrf
                {{-- Mensaje si los datos no son correctos viene de LoginController --}}
                @if(session('mensaje'))
                <span class="text-red-500 text-sm italic">{{ session('mensaje') }}</span>
                @endif

                {{-- Email --}}
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="email" placeholder="Tu Email de Registro"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}" />
                    {{-- Mensaje de error que viene de la validacion --}}
                    @error('email')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Password --}}
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password de Registro"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
                    @error('password')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Submit --}}
                <input type="submit" type="submit" value="Iniciar Sesión"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
            </form>
        </div>
    </div>
@endsection
