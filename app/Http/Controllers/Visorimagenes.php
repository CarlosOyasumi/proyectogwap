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
}
