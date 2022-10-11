@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    {{-- Imagen Principal --}}
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">
        </div>
        {{-- Formulario --}}
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                {{-- Name --}}
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" type="text" placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}" />
                    {{-- Mensaje de error que viene de la validacion --}}
                    @error('name')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Username --}}
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="username" name="username" type="text" placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ old('username') }}" />
                    {{-- Mensaje de error que viene de la validacion --}}
                    @error('username')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
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
                {{-- Repetir password --}}
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir
                        Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password"
                        placeholder="Repite tu Password"
                        class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500 @enderror" />
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Submit --}}
                <input type="submit" type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
            </form>
        </div>
    </div>
@endsection
