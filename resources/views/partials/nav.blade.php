<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">

        <img src="{{ asset('resources/img/triangulo.png') }}" alt="Inf">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('instruc') }}">Instrucciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('registro') }}">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>