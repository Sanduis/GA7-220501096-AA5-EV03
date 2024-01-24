<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('empresa_id') }}
            {{ Form::select('empresa_id', $empresa ,$empleado->empresa_id, ['class' => 'form-control' . ($errors->has('empresa_id') ? ' is-invalid' : ''), 'placeholder' => 'Empresa Id']) }}
            {!! $errors->first('empresa_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $empleado->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $empleado->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CC') }}
            {{ Form::text('CC', $empleado->CC, ['class' => 'form-control' . ($errors->has('CC') ? ' is-invalid' : ''), 'placeholder' => 'Cc']) }}
            {!! $errors->first('CC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nomina') }}
            {{ Form::text('nomina', $empleado->nomina, ['class' => 'form-control' . ($errors->has('nomina') ? ' is-invalid' : ''), 'placeholder' => 'Nomina']) }}
            {!! $errors->first('nomina', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('faltas') }}
            {{ Form::text('faltas', $empleado->faltas, ['class' => 'form-control' . ($errors->has('faltas') ? ' is-invalid' : ''), 'placeholder' => 'Faltas']) }}
            {!! $errors->first('faltas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('devengado') }}
            {{ Form::text('devengado', $empleado->devengado, ['class' => 'form-control' . ($errors->has('devengado') ? ' is-invalid' : ''), 'placeholder' => 'Devengado']) }}
            {!! $errors->first('devengado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deducciones') }}
            {{ Form::text('deducciones', $empleado->deducciones, ['class' => 'form-control' . ($errors->has('deducciones') ? ' is-invalid' : ''), 'placeholder' => 'Deducciones']) }}
            {!! $errors->first('deducciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('percepciones') }}
            {{ Form::text('percepciones', $empleado->percepciones, ['class' => 'form-control' . ($errors->has('percepciones') ? ' is-invalid' : ''), 'placeholder' => 'Percepciones']) }}
            {!! $errors->first('percepciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>