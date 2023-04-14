<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\imagene;
use App\Models\User;

class Visorimagenes extends Controller
{
    public function index()
    {
        $image = imagene::all();
        return view('viewimg' , compact('image'));
    }

    public function puntuaciones()
    {
        $usuarios = User::orderBy('puntos', 'desc')->get();
        return view('puntuaciones' , compact('usuarios'));
    }

    public function play()
    {
        //para que el genere 3 imagenes aleatoria solo cambiar el limite de 1 a 3 
        $imagenesAleatorias = imagene::inRandomOrder()->limit(3)->get();
        return view('Thegame' , compact('imagenesAleatorias'));
    }
}
