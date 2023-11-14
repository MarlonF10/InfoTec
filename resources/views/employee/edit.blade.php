@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Employee
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Employee</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('employee.update', $employee->id) }}"  role="form" enctype="multipart/form-data">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registers.index') }}"> {{ __('Back') }}</a>
                            </div>
                    </div>
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('employee.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
