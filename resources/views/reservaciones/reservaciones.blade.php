@extends('layouts.app')
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection
@section('content')
<div class="container">
<p class="text-center font-weight-bold text-white" style="font-size:2.5rem;">
    Reservaciones
</p>
<div class="input-group mb-3">
    <span class="input-group-text">Nombre</span>
    <input type="text" class="form-control">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text">Fecha</span>
    <input type="text" class="form-control">
  </div>
  <div class="input-group mt-3 mb-3">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
      Mesas disponibles
    </button>
    <ul class="dropdown-menu">
    <li class="dropdown-item">1</li>
    <li class="dropdown-item">2</li>
    <li class="dropdown-item">3</li>
    <li class="dropdown-item">4</li>
    <li class="dropdown-item">6</li>
    <li class="dropdown-item">7</li>
    </ul>
  </div>
<div class="btn-group">
<a class="btn btn-success">Guardar</a>
<a class="btn btn-info">Consultar</a>
<a class="btn btn-warning">Modificar</a>
<a class="btn btn-danger">Eliminar</a>
</div>
<br>
<table class="table table-striped">
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Mesa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Israel Espinoza</td>
            <td>7 de abril</td>
            <td>2</td>
        </tr>
        <tr>
            
            <td>Ivan Morales</td>
            <td>11 de septiembre</td>
            <td>1</td>
        </tr>
        <tr>
            
            <td>Guillermo Martinez</td>
            <td>20 de septiembre</td>
            <td>6</td>
        </tr>
        <tr>
            
            <td>Ismael Reyes</td>
            <td>11 de octubre</td>
            <td>7</td>
        </tr>
    </tbody>
</table>
</div>

@endsection
