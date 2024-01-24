@extends('layouts.app')

@section('template_title')
    {{ $nomina->name ?? "{{ __('Show') Nomina" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nomina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('nominas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empleados Id:</strong>
                            {{ $nomina->empleados_id }}
                        </div>
                        <div class="form-group">
                            <strong>Convenios Id:</strong>
                            {{ $nomina->convenios_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
