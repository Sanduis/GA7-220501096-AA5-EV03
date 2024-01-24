@extends('layouts.app')

@section('template_title')
    {{ $convenio->name ?? "{{ __('Show') Convenio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Convenio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('convenios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $convenio->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Registro:</strong>
                            {{ $convenio->registro }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
