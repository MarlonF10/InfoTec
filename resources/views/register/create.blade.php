@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Register
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Registro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('registers.store') }}"  role="form" enctype="multipart/form-data">
                        
                    </div>
                    
                            @csrf

                            @include('register.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
