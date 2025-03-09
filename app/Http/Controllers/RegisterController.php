<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //Muestro el formulario de registro
    public function create(){
        return view('auth.register');
    }

    //Proceso los datos del formulario 
    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        Auth::login($user);

        return redirect('/');

    }
}
