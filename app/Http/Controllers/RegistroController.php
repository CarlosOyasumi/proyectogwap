<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

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
    
    User::create([
        'nombre' => $request->input('nombre'),
        'email' => $request->input('email'),
        'nacimiento' =>$request->input('nacimiento'),
        'sexo'=>$request->input('sexo'),
        'password' => bcrypt($request->input('password')),
    ]);

    
   

    return redirect()->route('login');



}

public function actualizar(Request $request, $id){
    $request->validate([
        'nombre' =>'required', 'string', 'max:255',
        'password'=>'required','confirmed',
        'sexo'=>'required','string',
        'nacimiento'=>'required','date',

    ]);


    $user=User::find($id);
    $user->nombre =$request->input('nombre');
    $user->sexo =$request->input('sexo');
    $user->password =bcrypt($request->input('password'));
    $user->nacimiento =$request->input('nacimiento');
    $user->save();
    
    

       

    
   session()->flash('status','Haz actualizado tus datos');

    return redirect()->route('config');
}

}
