<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_Mesa') }}
            {{ Form::text('Nombre_Mesa', $mesa->Nombre_Mesa, ['class' => 'form-control' . ($errors->has('Nombre_Mesa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Mesa']) }}
            {!! $errors->first('Nombre_Mesa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>