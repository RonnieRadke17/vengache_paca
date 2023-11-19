@extends('layouts.app')
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection

@section('script1')
    {{ asset('js/reservacion.js') }}
@endsection

@section('content')
<div class="container">
<p class="text-center font-weight-bold text-white" style="font-size:2.5rem;">
    Reservaciones
</p>
<div class="input-group mb-3">
    <span class="input-group-text">Nombre</span>
    <input type="text" class="form-control" id="Name">
  </div>
  <div class="input-group mb-3">
    <span class="input-group-text">Fecha</span>
    <input type="text" class="form-control" id="fecha">
  </div>
  <select class="form-select form-select" id="categoria">
    <option value="null">Mesas disponibles</option>
    <option value="Deportiva">1</option>
    <option value="Cultural">2</option>
    <option value="Cultural">3</option>
    <option value="Cultural">4</option>
    <option value="Cultural">5</option>
</select>
<div class="btn-group">
<a class="btn btn-success" onclick="validar()">Guardar</a>
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
