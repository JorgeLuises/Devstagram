@extends('layouts.app')

@section('titulo')
    Inicia sesión en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:items-center md:gap-10">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('image/login.jpg')}}" alt="Imagen de loggin">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form >
                @csrf
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase font-bold"> Correo electrónico </label>
                    <input type="email" name="email" id="email" placeholder="Ingresa tu correo electrónico" class="border rounded-lg p-3 w-full focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:outline-none
                    @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase font-bold"> Contraseña </label>
                    <input type="password" name="password" id="password" placeholder="Crea una contraseña" class="border rounded-lg p-3 w-full focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:outline-none
                    @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Iniciar sesión" class="border rounded-lg w-full bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold text-white p-3">
            </form>
        </div>
    </div>
@endsection