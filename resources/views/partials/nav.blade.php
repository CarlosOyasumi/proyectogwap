<section class="header">

  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid  justify-content-center mx-auto">
      <a class="navbar-brand mx-auto" href="#">

        <img src="{{ asset('img/logo.png') }}" alt="Inf"  width="200">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('instruc') }}">Instrucciones</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('registro') }}">Registro</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('puntuaciones') }}">Puntuaciones</a>
          </li>

          @endguest
         
       
         
         
        </ul>
      </div>
    </div>
    <div class="container-fluid  justify-content-center mx-auto">
      @guest
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
      @else
      <div class="btn-group mr-auto" >
        <button class="btnc btn-secondary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
              @auth
              <span class="espacios">  <i class="fa-solid fa-user-astronaut"></i> ¡Hola
                {{ Auth::user()->nombre }}!
              </span>
             
              @endauth
        </button>
        <div class="dropdown-menu dropdown-menu-start" aria-labelledby="triggerId">
          <a class="dropdown-item" href="{{ route('config') }}"> <i class="fa-solid fa-gear"></i> Configuración </a>
    
          <h6 class="dropdown-header">¿Ya tienes que irte?</h6>
          <a class="dropdown-item" href="{{ route('Cerrar',) }}"> <i class="fa-solid fa-right-to-bracket"></i> Salir</a>
          
        </div>
      </div>
      @endguest
      
    
      
      </div>
  </nav>
</section>