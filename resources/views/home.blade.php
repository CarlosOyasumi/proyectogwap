@extends('layouts.app')

@section('titulo', 'Inicio')

@section('content')


    <section class="cuadro">
        
        <h1 class="loletras"><i class="fa-solid fa-gamepad"></i></i> ¡Bienvenido a Gwap!</h1>
        <br>
        <br>
        @guest
        <center>
            <h2>Para poder jugar es necesario que te registres primero</h2>
        </center>
          

            @else
            <center>
                <h2>¡Gracias por registrarte!</h2>
                <h2>Puede que tengas un par de dudas antes de iniciar a jugar, así que te recomendamos que leas primero las instrucciones</h2>
                <a href="{{ route('play') }}" class="btn">Jugar</a>
            </center>
            
            
            
            
        @endguest
    </section>

@endsection


    
