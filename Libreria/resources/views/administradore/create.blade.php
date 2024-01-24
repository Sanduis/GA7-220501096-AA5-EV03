@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Administradore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Administradore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('administradores.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('administradore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
