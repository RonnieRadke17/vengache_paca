<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ID_Trabajador') }}
            {{ Form::text('ID_Trabajador', $descanso->ID_Trabajador, ['class' => 'form-control' . ($errors->has('ID_Trabajador') ? ' is-invalid' : ''), 'placeholder' => 'Id Trabajador']) }}
            {!! $errors->first('ID_Trabajador', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $descanso->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>