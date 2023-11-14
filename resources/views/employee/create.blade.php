@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Employee
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Employee</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('employee.store') }}"  role="form" enctype="multipart/form-data">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registers.index') }}"> {{ __('Back') }}</a>
                            </div>
                    </div>
                            @csrf

                            @include('employee.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
