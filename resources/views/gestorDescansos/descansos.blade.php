@extends('layouts.app')
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection
@section('script1')
    {{ asset('js/descansos.js') }}
@endsection


@section('content')
<div class="container">
<p class="text-center font-weight-bold text-white" style="font-size:2.5rem;">
    Gestor de descansos
</p>
<div class="input-group mb-3">
    <span class="input-group-text">Empleado</span>
    <input type="text" class="form-control" id="empleado">
  </div>
  
  <div class="input-group mt-3 mb-3">
    <select class="form-select form-select" id="descanso">
        <option value="null">Dias de descanso</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
  </div>
<div class="btn-group">
<button class="btn btn-success" onclick="validar()">Guardar</button>    
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
