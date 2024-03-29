@extends('layouts.settings')

@section('titulo', 'Configuración')

@section('content')

<center>
    <section  class="cuadro">
        <h1>¡Actualiza tus datos!</h1>
    <div class="circulo">
        <center> 
       <img  class="logo"src="{{ asset('img/Lmin.png') }}" alt="" ">
   </center>
   
   </div>
    
    <div class="mi-div container justify-content-center mx-auto">
        {{ $id=Auth::user()->id }}
        
      
        
       
        <form class="row g3-mt-3"action="{{ route('actualizar.pros', $id) }}" method="POST">
          
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @csrf
            <div class="col-6">
                <label for="tex" class="form-label"><i class="fa-regular fa-user"></i> Nombre</label>
                <input type="text" class="form-control" name="nombre" >
                </div>
    
    
              
    
    
                <div class="col-6">
                <label for="tex" class="form-label"> <i class="fa-solid fa-lock"></i> Contraseña</label>
                <input type="password" class="form-control" name="password">
                </div>
    
    
                <div class="col-6">
                <label for="tex" class="form-label"> <i class="fa-solid fa-lock"></i> Confirmar contraseña</label>
                <input type="password" class="form-control" name="password_confirmation">
                </div>
    
                <div class="col-6">
                <label for="tex" class="form-label"> <i class="fa-solid fa-cake-candles"></i> Fecha de nacimiento</label>
                <input type="date" class="form-control" name="nacimiento">
                </div>
    
                <div class="col-4">
                <p>
                    
                    <label for="tex" class="form-label"> <i class="fa-solid fa-venus-mars"></i> Género:</label>
                    
    
                    <select  class="form-control" id="SexoInput" name="sexo">
    
                    <option>Masculino</option>
    
                    <option>Femenino</option>
    
                    </select>
    
                    </p>
                </div>
                
                <input type="submit" class="button2 btn-outline-warning btn-darkgit btn-lg px-4 me-md-2 px-3 py-2 d-block" value="Registrar">
            



        </form>
    </div>
    </section>
</center>


@endsection