<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empleados_id') }}
            {{ Form::select('empleados_id', $empleado ,$nomina->empleados_id, ['class' => 'form-control' . ($errors->has('empleados_id') ? ' is-invalid' : ''), 'placeholder' => 'Empleados Id']) }}
            {!! $errors->first('empleados_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('convenios_id') }}
            {{ Form::select('convenios_id', $convenio ,$nomina->convenios_id, ['class' => 'form-control' . ($errors->has('convenios_id') ? ' is-invalid' : ''), 'placeholder' => 'Convenios Id']) }}
            {!! $errors->first('convenios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>