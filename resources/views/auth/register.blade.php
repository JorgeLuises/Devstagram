@extends('layouts.app')

@section('titulo')
    Registra tu cuenta
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:items-center md:gap-10">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('image/registrar.jpg')}}" alt="Imagen de regsitro de usuario">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase font-bold"> Nombre </label>
                    <input type="text" name="name" id="name" placeholder="Ingresa tu nombre" class="border rounded-lg p-3 w-full focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:outline-none
                    @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase font-bold"> Usuario </label>
                    <input type="text" name="username" id="username" placeholder="Ingresa tu nombre de usuario" class="border rounded-lg p-3 w-full focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:outline-none
                    @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    @error('username')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
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
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase font-bold"> Repite contraseña </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repetir contraseña" class="border rounded-lg p-3 w-full focus:ring-1 focus:ring-blue-500 focus:border-blue-500 focus:outline-none
                    @error('password_confirmation') border-red-500 @enderror">
                    @error('password_confirmation')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Crear Cuenta" class="border rounded-lg w-full bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold text-white p-3">
            </form>
        </div>
    </div>
@endsection