@extends('layouts.app')

@section('template_title')
    Product
@endsection
@section('style1')
    {{ asset('css/imagen.css') }}
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">{{ __('Productos') }}</h5>
                        <a href="{{ route('product.create') }}" class="btn btn-light btn-sm">{{ __('Crear') }}</a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Categoría</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td>{{ $product->nombre }}</td>
                                    <td>{{ $product->precio }}</td>
                                    <td>{{ $product->descripcion }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->categoria }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Acciones">
                                            <a class="btn btn-light" href="{{ route('product.show',$product->id) }}">Ver</a>
                                            <a class="btn btn-warning" href="{{ route('product.edit',$product->id) }}">Editar</a>
                                            <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $products->links() !!}
        </div>
    </div>
</div>
@endsection
