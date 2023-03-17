@extends('layouts.app')

@section('titulo', 'Instrucciones')

@section('content')

<section class="cuadro">

    <div class="container">
              
        <div class="row">
          <div class="col-12 col-sm-6">
            <center>
            <img class="img-fluid"src="{{ asset('img/Thing.png')}}" alt="slide4">
        </center>
          </div>
          <div class="col-12 col-sm-6">
           <p> Para poder iniciar el juego deben haber 3 personas en la sala</p>

           <p> Los juegos pueden volverse más interesantes e impredecibles con tres jugadores, ya que cada uno tiene un papel más importante en el juego.</p>
            
           <p> Además al jugar con mas personas tienes la posibilidad de poder coincidir la misma palabra.</p>
            
           
          </div>
        </div>
      </div>

</section>

<section class="cuadro">

    <div class="container">
              
        <div class="row">
          <div class="col-12 col-sm-6">
            <br>
            <br>
          
         <p>Al comenzar el juego, aparecerá una imagen aleatoria a tres usuarios diferentes, y cada usuario tendrá un minuto para escribir todas las etiquetas y características que se les ocurran   
          en ese tiempo.</p>
          <br>
          
        <p> Por ejemplo, si aparece la imagen de un balón de fútbol, se podría agregar etiquetas como "balón", "fútbol", "grama", "mundial", "Messi", "aire", "Deportivo Táchira", 
          "blanco", "Brazuca", "Pelé", entre otras.</p>   
          
          </div>
          <div class="col-12 col-sm-6">
            <center>
                <img class="img-fluid"src="{{ asset('img/robot.png')}}" alt="slide4">
            </center>
          </div>
        </div>
      </div>

</section>

<section class="cuadro">

    <div class="container">
              
        <div class="row">
          <div class="col-12 col-sm-6">
            <center>
                <img class="img-fluid"src="{{ asset('img/inicio.png')}}" alt="slide4">
            </center>
          
          </div>
          <div class="col-12 col-sm-6">
            <p>Puedes también consultar tus puntos en tu perfil además de poder configurar tu información</p>
            
          </div>
        </div>
      </div>

</section>
@endsection