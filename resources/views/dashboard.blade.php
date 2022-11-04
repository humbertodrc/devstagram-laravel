@extends('layouts.app')

@section('titulo')
  Tu cuenta
@endsection

@section('contenido')
  <div class="flex justify-center">
    <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
      <div class="md:w-8/12 lg:w-6/12 px5">
        <img src="{{asset('img/usuario.svg')}}" alt="imagen usuario">
      </div class="md:w-8/12 lg:w-6/12 px5">
      <div>
        <p class="text-gray-700 text-2xl">{{auth()->user()->username}}</p>
      </div>
    </div>
  </div>
@endsection