@extends('layouts.app')

@section('template_title')
    {{ $descanso->name ?? "{{ __('Show') Descanso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Descanso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('descansos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Trabajador:</strong>
                            {{ $descanso->ID_Trabajador }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $descanso->Fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
