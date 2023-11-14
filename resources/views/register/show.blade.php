@extends('layouts.app')

@section('template_title')
    {{ $register->name ?? "{{ __('Show') Register" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registers.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del estudiante:</strong>
                            {{ $register->name_student }}
                        </div>
                        <div class="form-group">
                            <strong>Carerra del estudiante:</strong>
                            {{ $register->career_student }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $register->genere }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $register->state }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de registro:</strong>
                            {{ $register->register_date }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
