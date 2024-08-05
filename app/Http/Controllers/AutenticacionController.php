<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\NuevoUsuarioRequest;
use App\Http\Requests\InciarSesionUsuarioRequest;

class AutenticacionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['iniciarSesion', 'registrarUsuario']);
    }

    public function iniciarSesion(InciarSesionUsuarioRequest $request)
    {
        $credenciales = $request->only('email', 'password');

        if (Auth::attempt($credenciales)) {
            return redirect()->route('auth.verPerfil');
        }

        return redirect()->back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function registrarUsuario(NuevoUsuarioRequest $request)
    {
        $usuario = new User();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->rol = $request->input('rol');
        $usuario->save();

        Auth::attempt($request->only('email', 'password'));

        return redirect()->route('auth.verPerfil');

    }

    public function cerrarSesion()
    {
        Auth::logout();
        return redirect('/');
    }

    public function verPerfil()
    {
        return view('perfil');
    }
}
