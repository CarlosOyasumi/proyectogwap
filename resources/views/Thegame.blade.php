@extends('layouts.app_play')

@section('titulo', 'Juego')

@section('content')

<center>
    <div class="timer">

        <span id="countdown" class="countdown-timer">3:00</span>
<button id="start-btn" class="start-button">Empezar</button>
    </div>

    <div class="card-group">
        @foreach ($image as $item)
       
        <div class="card">
            <img class="card-img-top" src="{{ asset($item->name) }}" alt="">
            <div class="card-body">
                <h5 class="titulo" >{{ $item->id }}</h5>
                </div>
        </div>
        @endforeach
    </div>
</center>

@endsection