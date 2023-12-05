@extends('layouts.app')

@section('template_title')
    {{ $reservacione->name ?? "{{ __('Show') Reservacione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reservacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $reservacione->ID_Cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Mesa:</strong>
                            {{ $reservacione->ID_Mesa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $reservacione->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $reservacione->Hora }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $reservacione->Estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
