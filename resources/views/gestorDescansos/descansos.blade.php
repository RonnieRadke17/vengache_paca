@extends('layouts.app')
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection
@section('content')
<div class="container">
<p class="text-center font-weight-bold text-white" style="font-size:2.5rem;">
    Gestor de descansos
</p>
<div class="input-group mb-3">
    <span class="input-group-text">Empleado</span>
    <input type="text" class="form-control">
  </div>
  
  <div class="input-group mt-3 mb-3">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown">
      Dias de descanso
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
<a href="{{url('/trabajador')}}" class="btn btn-success">Guardar</a>
<a href="{{url('/trabajador')}}" class="btn btn-info">Consultar</a>
<a href="{{url('/trabajador')}}" class="btn btn-warning">Modificar</a>
<a href="{{url('/trabajador')}}" class="btn btn-danger">Eliminar</a>
</div>
<br>
<table class="table table-striped">
    <thead class="thead-light">
        <tr>
            <th>Empleado</th>
            <th>Dias de descanso</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>José Juarez</td>
            <td>7</td>
        </tr>
        <tr>
            
            <td>Cris David</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Juan Martinez</td>
            <td>4</td>
        </tr>
        </tbody>
</table>
</div>

@endsection
