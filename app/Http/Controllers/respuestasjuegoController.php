<?php

namespace App\Http\Controllers;

use App\Models\resp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Exception;
use Exception as GlobalException;

class respuestasjuegoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    Log::info('Guardando respuesta', [
        'texto' => $request->input('texto'),
        'imagen_id' => $request->input('imagen_id'),
        'nombre' => $request->input('nombre')
    ]);

    try {
        $respuesta = new resp();
        $respuesta->nombre = $request->input('nombre');
        $respuesta->id_imagen = $request->input('imagen_id');
        $respuesta->respuesta = $request->input('texto');
        $respuesta->save();

        Log::info('Respuesta guardada', [
            'texto' => $request->input('texto'),
            'imagen_id' => $request->input('imagen_id'),
            'nombre' => $request->input('nombre')
        ]);

        return response()->json(['success' => true]);
    } catch (GlobalException $e) {
        Log::error('Error al guardar la respuesta', ['error' => $e->getMessage()]);

        return response()->json(['success' => false, 'message' => 'Error al guardar la respuesta']);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(resp $resp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(resp $resp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, resp $resp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(resp $resp)
    {
        //
    }
}
