@extends('layouts.app')
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection
@section('script1')
    {{ asset('js/descansos.js') }}
@endsection


@section('content')
    <div class="container">
      <h1 class="mb-4 text-white">Menú de Productos</h1>

        <div class="row">
            @foreach ($productos as $producto)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">{{ $producto->descripcion }}</p>
                            <p class="card-text">Precio: ${{ $producto->precio }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
