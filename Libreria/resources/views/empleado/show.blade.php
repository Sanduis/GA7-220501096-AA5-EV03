@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? "{{ __('Show') Empleado" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empresa Id:</strong>
                            {{ $empleado->empresa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleado->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $empleado->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Cc:</strong>
                            {{ $empleado->CC }}
                        </div>
                        <div class="form-group">
                            <strong>Nomina:</strong>
                            {{ $empleado->nomina }}
                        </div>
                        <div class="form-group">
                            <strong>Faltas:</strong>
                            {{ $empleado->faltas }}
                        </div>
                        <div class="form-group">
                            <strong>Devengado:</strong>
                            {{ $empleado->devengado }}
                        </div>
                        <div class="form-group">
                            <strong>Deducciones:</strong>
                            {{ $empleado->deducciones }}
                        </div>
                        <div class="form-group">
                            <strong>Percepciones:</strong>
                            {{ $empleado->percepciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
