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
        <option value="null">Dia de descanso</option>
        <option value="1">Lunes</option>
        <option value="2">Martes</option>
        <option value="3">Miércoles</option>
        <option value="4">Jueves</option>
        <option value="5">Viernes</option>
        <option value="6">Sábado</option>
        <option value="7">Domingo</option>
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
            <th>Dia de descanso</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>José Juarez</td>
            <td>Lunes</td>
        </tr>
        <tr>
            
            <td>Cris David</td>
            <td>Martes</td>
        </tr>
        <tr>
            <td>Juan Martinez</td>
            <td>Jueves</td>
        </tr>
        </tbody>
</table>
</div>

@endsection
