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
          <li class="nav-item">
            <a class="nav-link" href="{{ route('registro') }}">Registro</a>
          </li>
         
         
        </ul>
      </div>
    </div>
    <div class="container-fluid  justify-content-center mx-auto">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
      </div>
  </nav>
</section>