<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //Mostrar el formulario
    public function create(){
        return view('auth.login');
    }

    //Procesar datos del formulario
    public function store(Request $request){

        $credenciales = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(!Auth::attempt($credenciales)){
            throw ValidationException::withMessages([
                'email' => 'Esas credenciales no son correctas.'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route('sections.home');

    }



    public function destroy(Request $request){
        //Crramos sesion
        Auth::logout();

        //invalidamos la sesin
        $request->session()->invalidate();

        return redirect('/');
    }
}
