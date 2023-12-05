@extends('layouts.app')

@section('template_title')
    Reservacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reservacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reservaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Cliente</th>
										<th>Id Mesa</th>
										<th>Fecha</th>
										<th>Hora</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservaciones as $reservacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reservacione->ID_Cliente }}</td>
											<td>{{ $reservacione->ID_Mesa }}</td>
											<td>{{ $reservacione->Fecha }}</td>
											<td>{{ $reservacione->Hora }}</td>
											<td>{{ $reservacione->Estado }}</td>

                                            <td>
                                                <form action="{{ route('reservaciones.destroy',$reservacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reservaciones.show',$reservacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reservaciones.edit',$reservacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $reservaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
