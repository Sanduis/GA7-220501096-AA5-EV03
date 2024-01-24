@extends('layouts.app')

@section('template_title')
    {{ $administradore->name ?? "{{ __('Show') Administradore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Administradore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('administradores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empleados Id:</strong>
                            {{ $administradore->empleados_id }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $administradore->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $administradore->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
