@extends('layouts.settings')

@section('titulo', 'Agregar imagen')

@section('content')
<center>
    <section  class="cuadro">
        <form class="row g3-mt-3"action="{{ route('Agregarimagen') }}" method="POST" enctype="multipart/form-data">
          
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
            <div class="custom-file mb">
                <input type="file" class="custom-file-input" id="customFile" name="name">
                <label class="custom-file-label" for="customFile">Elegir archivo</label>
              </div>

                <br>
                
                <input type="submit" class="button2 btn-outline-warning btn-darkgit btn-lg px-4 me-md-2 px-3 py-2 d-block" value="Registrar">
            



        </form>
    </section>
</center>
@endsection