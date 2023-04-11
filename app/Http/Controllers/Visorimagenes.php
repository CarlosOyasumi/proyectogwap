<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\imagene;

class Visorimagenes extends Controller
{
    public function index()
    {
        $image = imagene::all();
        return view('viewimg' , compact('image'));
    }

    public function play()
    {
        //para que el genere 3 imagenes aleatoria solo cambiar el limite de 1 a 3 
        $imagenesAleatorias = imagene::inRandomOrder()->limit(1)->get();
        return view('Thegame' , compact('imagenesAleatorias'));
    }
}
