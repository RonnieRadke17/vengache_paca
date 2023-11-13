@extends('layouts.app')
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection


@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <ul class="list-group">
                <li class="list-group-item active text-center">
                    <img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="Avatar" class="img-fluid rounded-circle mb-3 avatar-img ">
                    <h4 class="text-white">Administrador</h4>
                </li>
                <li class="list-group-item">
                    <strong>Nombre:</strong> Cris David
                </li>
                <li class="list-group-item">
                    <strong>Correo electrónico:</strong> admin@example.com
                </li>
                <li class="list-group-item">
                    <strong>Fecha de Nacimiento:</strong> 01/01/1990
                </li>
                <li class="list-group-item">
                    <strong>Contraseña:</strong> ***********
                </li>
                
            </ul>
        </div>
    </div>
</div>
@endsection
