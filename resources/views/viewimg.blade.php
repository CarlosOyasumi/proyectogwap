@extends('layouts.settings')

@section('titulo', 'Configuración')

@section('content')

<center>
    <section  class="cuadro">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="card-columns">
                        <div class="card-group">
                        @foreach ($image as $item)
                       
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($item->name) }}" alt="">
                            <div class="card-body">
                                <h5 class="titulo" >{{ $item->id }}</h5>
                                </div>
                        </div>
                        @endforeach
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</center>
@endsection