@extends('layouts.app')

@section('titulo', 'Puntuaciones')

@section('content')

<center>
    <h1>¡MIRA QUIEN TIENE LOS PUNTAJES MÁS ALTOS!</h1>
    <section class="cuadro">
        @foreach ($usuarios as $usuario)
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>{{ $usuario->nombre }} - {{ $usuario->puntos }} puntos</p>
              </div>
            </div>
          </div>
          
        </div>
           
       
            
    
    
@endforeach
    
    </section>
</center>

@endsection