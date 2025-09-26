<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.register');
    }

    public function store(Request $request) {
        //MOdificar el request
        $request->request->add(['username' => Str::slug($request->username)]);
        
        //Validación de datos del formulario
        $request->validate([
            'name' => 'required|min:2|max:35',
            'username' => 'required|min:2|max:20|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        //Creación del usuario
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);

        //Autenticación de usuario
        /*Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);*/
        Auth::attempt($request->only('email', 'password'));

        //Redirección de pagina
        return redirect()->route('post.index');
    }
}
