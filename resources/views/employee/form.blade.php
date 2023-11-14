<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('genere') }}
            {{ Form::text('genere', $employee->genere, ['class' => 'form-control' . ($errors->has('genere') ? ' is-invalid' : ''), 'placeholder' => 'Genere']) }}
            {!! $errors->first('genere', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_student_employees') }}
            {{ Form::text('number_student_employees', $employee->number_student_employees, ['class' => 'form-control' . ($errors->has('number_student_employees') ? ' is-invalid' : ''), 'placeholder' => 'Number Student Employees']) }}
            {!! $errors->first('number_student_employees', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('career') }}
            {{ Form::text('career', $employee->career, ['class' => 'form-control' . ($errors->has('career') ? ' is-invalid' : ''), 'placeholder' => 'Career']) }}
            {!! $errors->first('career', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('register') }}
            {{ Form::text('register', $employee->register, ['class' => 'form-control' . ($errors->has('register') ? ' is-invalid' : ''), 'placeholder' => 'Register']) }}
            {!! $errors->first('register', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>