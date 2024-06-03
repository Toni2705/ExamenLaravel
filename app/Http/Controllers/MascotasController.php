<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotasController 
{
    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nick' => 'required',
            'password' => 'required',
        ]);
        // Llamar a la función del modelo para buscar al usuario
        $mascota = Mascota::where('nick', $request->nick)->first();

    // Verificar si se encontró un corredor
        if ($mascota) {
            // Verificar si la contraseña proporcionada coincide con la almacenada en la base de datos
            if ($request->password === $mascota->password) {            
                Auth::login($mascota);
                return redirect()->route('mostrarDatosEnVista', ['usuario' => $mascota->nick]);
            }
        }
        else {

            // Usuario no autenticado, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
            return redirect(url('/'));
        }
    }

    public function mostrarDatosEnVista($usuario)
    {
        $sexoUsuario = Mascota::where('nick', $usuario)->first();

        $datos = Mascota::where('sexo', '!=', $sexoUsuario->sexo)->where('raza', $sexoUsuario->raza)->get();

        // Pasar los datos a la vista
        return view('home', ['mascotas' => $datos], ['usuario'=> $usuario]);
    }

    public function paginaFoto($usuario){
        $datos = Mascota::where('nick', $usuario)->first();
        return view('foto',['mascota' => $datos]);
    }

    public function logout()
    {
         return view('login');
    }


}
