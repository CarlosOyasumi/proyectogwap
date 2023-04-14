@extends('layouts.app_play')

@section('titulo', 'Juego')

@section('content')

<center>
    <div class="timer">
        <span id="countdown" class="countdown-timer">3:00</span>
        <button id="start-btn" class="start-button">Empezar</button>
    </div>
    <br>
    <br>
    <div class="card-columns">
        <div class="card-group">
        <div class="card-group image-container" id="image-container">
          @foreach ($imagenesAleatorias as $key => $item)
          <div class="card hidden">
            <img class="card-img-top" src="{{ asset($item->name) }}" alt="">
            <label for="texto">Escriba un texto:</label>
            <input type="text" class="texto-input">
            <button class="guardar-btn" data-nombre="{{ Auth::user()->nombre }}" data-imagen-id="{{ $item->id }}">Guardar</button>
          </div>
        @endforeach
        </div>
    </div>
    </div>
   
    <div id="informacion-guardada"></div>

</center>

@endsection