@extends('layouts.app')
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection


@section('content')
<div class="container text-white">
    <div class="row">
        <div class="col-sm-12">
            <p class="text-center font-weight-bold" style="font-size: 1.5rem;">
                Restaurante de comida japonesa,
                en ambas sucursales disfrutarás de un agradable ambiente
                familiar con excelentes espacios, decoración y música ambiental.
            </p>
            <p class="text-center font-weight-bold" style="font-size: 1.5rem;">
                Muy funcional para comida de negocios, tarde de amig@s, festejos especiales entre otros.
            </p>
            <p class="text-center font-weight-bold" style="font-size: 1.5rem;">
                En vengache pa´ca, ofrecemos una alta calidad en los alimentos, 
                excelente servicio y una amplia variedad de productos en nuestro menú.                
            </p>
        </div>
    </div>
</div>
@endsection
