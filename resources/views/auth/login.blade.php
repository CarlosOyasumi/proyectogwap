@extends('layouts.app')

@section('titulo', 'Login')

@section('content')

<section class="login-time">
    
    <div class="form-box">
        <div class="form-value">
            <form action="{{ route('login') }}" method="POST">
                
                @csrf
                <h1 class="loletras"><i class="fa-solid fa-house-user"></i> Iniciar sesión</h1>
                <br>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                
                
                <div clas="inputbox">
                    <label for="floatingInput"> <i class="fa-regular fa-envelope"></i> Correo</label>
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@gmail.com" name="email" required>
                    

                </div>
                <br>
                <div clas="inputbox">
                    <label for="floatingPassword"><i class="fa-solid fa-key"></i> Contraseña</label>
                    <input type="password" class="form-control" id="floatingPassword" placeholder="contraseña" name="password">
                    

                </div>

                <br>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="recuerdame">
                  <label class="form-check-label" for="">
                    <i class="fa-solid fa-bookmark"></i> Recuerdame 
                  </label>
                
                  <br>
   
                <input type="submit" class="button2" value="Iniciar">
                <br>
                <div class="registro">
                    <h5>¿No tienes una cuenta?</h5>
                    <a class="h1"href="{{ route('registro') }}"> <i class="fa-solid fa-address-card"></i> ¡Registrate!</a>

                </div>
            </form>

        </div>

    </div>
    
</section>

@endsection