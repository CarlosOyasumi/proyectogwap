<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Persona;

class RegistroController extends Controller
{
    public function create()
{
    return view('auth.registro');
}

public function login()
{
    return view('login');
}

public function store(Request $request)
{
    $request->validate([
        'nombre' =>'required', 'string', 'max:255',
        'email'=>'required','string','email',
        'password'=>'required','confirmed',
        'sexo'=>'required','string',
        'nacimiento'=>'required','date',

    ]);
    
    Persona::create([
        'nombre' => $request->input('nombre'),
        'email' => $request->input('email'),
        'nacimiento' =>$request->input('nacimiento'),
        'sexo'=>$request->input('sexo'),
        'password' => bcrypt($request->input('password')),
    ]);

    
   

    return redirect()->route('login');



}

}
