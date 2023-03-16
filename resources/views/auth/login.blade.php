@extends('layouts.app')

@section('titulo', 'Login')

@section('content')

<section class="login-time">
    
    <div class="form-box">
        <div class="form-value">
            <form action="{{ route('login') }}" method="POST">
                
                @csrf
                <h1 class="loletras">Iniciar sesión</h1>
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
                    <label for="floatingInput">Correo</label>
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@gmail.com" name="email" required>
                    

                </div>
                <br>
                <div clas="inputbox">
                    <label for="floatingPassword">Contraseña</label>
                    <input type="password" class="form-control" id="floatingPassword" placeholder="contraseña" name="password">
                    

                </div>

                <br>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" name="recuerdame">
                  <label class="form-check-label" for="">
                    Recuerdame
                  </label>
                
                  <br>
   
                <input type="submit" class="button2" value="Iniciar">
                <br>
                <div class="registro">
                    <h5>¿No tienes una cuenta?</h5>
                    <a class="h1"href="{{ route('registro') }}"> ¡Registrate!</a>

                </div>
            </form>

        </div>

    </div>
    
</section>

@endsection