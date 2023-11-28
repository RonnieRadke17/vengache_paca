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
    Mesas
</p>
<div class="input-group mb-3">
    <span class="input-group-text">Mesa</span>
    <input type="text" class="form-control" id="empleado">
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
            <th>Id</th>
            <th>Mesa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            
            <td>2</td>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
            <td>3</td>
        </tr>
        </tbody>
</table>
</div>

@endsection
