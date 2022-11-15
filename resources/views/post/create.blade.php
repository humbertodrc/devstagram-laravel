@extends('layouts.app')

@section('titulo')
    Crea una nueva publicación
@endsection

@section('contenido')
    <div class="md:flex md:items-center">

        <div class="md:w-1/2 px-10">
            imagen aquí
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                {{-- Titulo --}}
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</label>
                    <input id="titulo" name="titulo" type="text" placeholder="Titulo de la publicación"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}" />
                    {{-- Mensaje de error que viene de la validacion --}}
                    @error('titulo')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Descripcion --}}
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">Descripción</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Descripción de la publicación"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">
                      {{ old('name') }}
                  </textarea>
                    {{-- Mensaje de error que viene de la validacion --}}
                    @error('descripcion')
                        <span class="text-red-500 text-sm italic">{{ $message }}</span>
                    @enderror
                </div>
                {{-- Submit --}}
                <input type="submit" type="submit" value="Crear Publicación"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
            </form>
        </div>

    </div>
@endsection
