@extends('layouts.app')

@section('titulo', 'Nosotros')


@section('content')
<section class="cuadro"> 
    <div class="mi-div container justify-content-center mx-auto">
    
        <div class="card text-white bg-primary">
          <img class="imgRedonda" src="{{ asset('img/Carlos.jpg') }}" alt="Title">
          <div class="card-body">
            <h4 class="card-title">Carlos Medina</h4>
            <p class="card-text">Estudiante de Ing. informatica</p>
          </div>
        </div>
    
    </div>
 
    </section>
    <section class="cuadro"> 

        <div class="mi-div container justify-content-center mx-auto">
            
            <div class="card text-white bg-primary">
              <img class="imgRedonda" src="{{ asset('img/Edgar.jpg') }}" alt="Title">
              <div class="card-body">
                <h4 class="card-title">Edgar Zambrano</h4>
                <p class="card-text">...</p>
              </div>
            </div>
        
        </div>
        </section>
   
   
    
<section class="cuadro2"> 
<div class="container justify-content-center mx-auto">

    <p>Para crear un juego Gwap con HTML, PHP y Laravel, los estudiantes necesitarían conocimientos sólidos en programación y diseño web. Podrían usar PHP para crear la funcionalidad del servidor y comunicar la información del juego con la base de datos. Laravel sería útil para proporcionar un marco robusto para la creación y gestión de rutas, así como para la implementación de autenticación y seguridad.</p>

       <p> En la parte de frontera, los estudiantes tendrían que diseñar e implementar una atractiva interfaz de usuario con HTML y CSS. También podrían usar JavaScript para la lógica del juego y proporcionar interacción en tiempo real. Podrían utilizar bibliotecas de JavaScript adicionales como Phaser.js o Construct 3 para simplificar la creación del juego y hacerlo más fácil de mantener.
    </p>
    <p> Con un enfoque en el diseño de experiencia de usuario, los estudiantes podrían implementar un sistema para registrar y mostrar las puntuaciones de los jugadores en la página web. En general, el proyecto requeriría una planificación cuidadosa, enfoque y dedicación para crear un juego Gwap de alta calidad utilizando estas tecnologías.</p> 
    <br>

</div>
</section>
    @endsection