<div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
    <div class="header-box px-2 pt-3 pb-4">
    <h1 class="h1 fs-2"> Configuración <span class=" h2 bg-white text-dark rounded shadow px-2 me-2"> Gwap </span>
   
    <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"></button>
    
    </h1>
    <center>
    @if (Auth::user()->sexo=="Masculino")
    <img class="perfilRedonda2 img-fluid rounded-circle" src="{{ asset('img/Pic_profile_hombre.png') }}" alt="Profile_Hombre">
    @else
    <img class="perfilRedonda2 img-fluid rounded-circle" src="{{ asset('img/Pic_profile_mujer.png') }}" alt="Profile_Mujer">
    @endif
</center>
    <center>
        <span class="h2"> {{ Auth::user()->nombre }} </span>
    </center>
    
    </div>

    <div>
        <ul class="list-unstyled px-2">
           <li class="active"><a href="#" class="h4 text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-house"></i>Configurar</a></li>
        </ul>
        <ul class="list-unstyled px-2">
            <li class=""><a href="/" class="h4 text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-house"></i>Volver</a></li>
         </ul>
       
        
       
        <a href="{{ route('Cerrar') }}" class="btn btn-outline-warning btn-darkgit btn-lg px-4 me-md-2 px-3 py-2 d-block" role="button" id="Back_button">Cerrar sesion</a>
    </div>

    </div>
    <div class="content">



