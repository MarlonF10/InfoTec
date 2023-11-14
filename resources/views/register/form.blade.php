<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre del estudiante') }}
            {{ Form::text('name_student', $register->name_student, ['class' => 'form-control' . ($errors->has('name_student') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del estudiante']) }}
            {!! $errors->first('name_student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera del estudiante') }}
            <select name="career_student" id="career_student" class="form-control">
                <option selected="true" disabled="disabled"> elige una opcion</option>
                <option value="Técnico General en Computación"> Técnico General en Computación</option>
                <option value="Técnico Especialista en Programación"> Técnico Especialista en Programación</option>
                <option value="Técnico Especialista en Banca y Finanzas"> Técnico Especialista en Banca y Finanzas</option>
                <option value="Técnico General en Cocina y Gastronomía"> Técnico General en Cocina y Gastronomía</option>
                <option value="Técnico General en Pastelería y Panadería"> Técnico General en Pastelería y Panadería</option>
                <option value="Técnico General en Servicio de Restaurante, Bar y Cafetería"> Técnico General en Servicio de Restaurante, Bar y Cafetería</option>
                <option value="Técnico General en Administración"> Técnico General en Administración</option>
                <option value="Técnico General en Contabilidad"> Técnico General en Contabilidad</option>
                <option value="Técnico General en Mecánica Automotriz de Vehículo Liviano Diésel y Gasolina"> Técnico General en Mecánica Automotriz de Vehículo Liviano Diésel y Gasolina</option>
                <option value="Técnico General en Electricidad Industrial"> Técnico General en Electricidad Industrial</option>
                <option value="Técnico Especialista en Administración de Flota Vehicular"> Técnico Especialista en Administración de Flota Vehicular</option>
                <option value="Técnico General en Gestión de Recursos Humano"> Técnico General en Gestión de Recursos Humanos</option>
                </select> 
            {!! $errors->first('career_student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            <select name="genere" id="genere" class="form-control">
                <option selected="true" disabled="disabled"> elige una opcion</option>
                <option value="Masculino"> Masculino</option>
                <option value="Femenino"> Femenino</option>
                </select> 
            {!! $errors->first('genere', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            <select name="state" id="state" class="form-control">
                <option selected="true" disabled="disabled"> elige una opcion</option>
                <option value="Egresado"> Egresado</option>
                <option value="No Egresado"> No Egresado</option> 
                </select> 
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de registro') }}
            {{ Form::date('register_date', $register->register_date, ['class' => 'form-control' . ($errors->has('register_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de registro']) }}
            {!! $errors->first('register_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <input class='btn btn-dark' type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
    </div>
</div>