<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group pb-4 pt-4">   
            {{ Form::label('Estatus') }}
            <select name="status" class="form-control input-sm">
                <option value="">
                    --Seleccione un Estatus--
                </option>
                <option value="Active">
                    Activo
                </option>
                <option value="Egress">
                    Egresado
                </option>
            </select>
            @if ($errors->has('status'))
                <span class="error text-danger" 
                for="input-name">{{ $errors->first('status') }}</span>
            @endif
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('cod') }}
            {{ Form::text('cod', $employee->cod, ['class' => 'form-control' . ($errors->has('cod') ? ' is-invalid' : '')]) }}
            {!! $errors->first('cod', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $employee->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : '')]) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Nacionalidad') }}
            <select name="nac" class="form-control input-sm">
                <option value="">
                    --Seleccione un Nacionalidad--
                </option>
                <option value="Venezolano">
                    Venezolano
                </option>
                <option value="Extranjero">
                    Extranjero
                </option>
            </select>
            @if ($errors->has('nac'))
                <span class="error text-danger" 
                for="input-name">{{ $errors->first('nac') }}</span>
            @endif
            {!! $errors->first('nac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Nombres') }}
            {{ Form::text('first_lastname', $employee->first_lastname, ['class' => 'form-control' . ($errors->has('first_lastname') ? ' is-invalid' : '')]) }}
            {!! $errors->first('first_lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Apellidos') }}
            {{ Form::text('second_lastname', $employee->second_lastname, ['class' => 'form-control' . ($errors->has('second_lastname') ? ' is-invalid' : '')]) }}
            {!! $errors->first('second_lastname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Fecha de nacimiento') }}
            {{ Form::date('birthday', $employee->birthday, ['class' => 'form-control' . ($errors->has('birthday') ? ' is-invalid' : '')]) }}
            {!! $errors->first('birthday', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Genero') }}
            <select name="gender" class="form-control input-sm">
                <option value="">
                    --Seleccione un Genero--
                </option>
                <option value="Hombre">
                    Hombre
                </option>
                <option value="Mujer">
                    Mujer
                </option>
            </select>
            @if ($errors->has('gender'))
                <span class="error text-danger" 
                for="input-name">{{ $errors->first('gender') }}</span>
            @endif
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Telefono') }}
            {{ Form::text('phone', $employee->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : '')]) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Posicion') }}
            <select name="position_id" class="form-control input-sm">
                <option value="">
                    --Seleccione una Posicion--
                </option>
                @foreach ($positions as $position)
                <option value={{ $position->id}}>
                    {{ $position->name}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('position_id'))
                <span class="error text-danger" 
                for="input-name">{{ $errors->first('position_id') }}</span>
            @endif
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Compañia') }}
            <select name="company_id" class="form-control input-sm">
                <option value="">
                    --Seleccione una compañia--
                </option>
                @foreach ($branches as $branche)
                <option value={{ $branche->id}}>
                    {{ $branche->name}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('company_id'))
                <span class="error text-danger" 
                for="input-name">{{ $errors->first('company_id') }}</span>
            @endif
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Departamento') }}

            <select name="departament_id" class="form-control input-sm">
                <option value="">
                    --Seleccione un Departamento--
                </option>
                @foreach ($departaments as $departament)
                <option value={{ $departament->id}}>
                    {{ $departament->name}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('departament_id'))
                <span class="error text-danger" 
                for="input-name">{{ $errors->first('departament_id') }}</span>
            @endif
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Fecha de admision') }}
            {{ Form::date('date_of_admission', $employee->date_of_admission, ['class' => 'form-control' . ($errors->has('date_of_admission') ? ' is-invalid' : '')]) }}
            {!! $errors->first('date_of_admission', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Fecha de egreso') }}
            {{ Form::date('date_of_egress', $employee->date_of_egress, ['class' => 'form-control' . ($errors->has('date_of_egress') ? ' is-invalid' : '')]) }}
            {!! $errors->first('date_of_egress', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Digitalizacion') }}
            {{ Form::text('digdoc', $employee->digdoc, ['class' => 'form-control' . ($errors->has('digdoc') ? ' is-invalid' : '')]) }}
            {!! $errors->first('digdoc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Fecha de digitalizacion') }}
            {{ Form::date('date_of_digdoc', $employee->date_of_digdoc, ['class' => 'form-control' . ($errors->has('date_of_digdoc') ? ' is-invalid' : '')]) }}
            {!! $errors->first('date_of_digdoc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Observacion') }}
            {{ Form::text('observation', $employee->observation, ['class' => 'form-control' . ($errors->has('observation') ? ' is-invalid' : '')]) }}
            {!! $errors->first('observation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('files') }}
            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                <div>
                    <span class="btn btn-raised btn-round btn-default btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="files" />
                    </span>
                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                </div>
            </div>
            {!! $errors->first('files', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group pb-4 pt-4">
            {{ Form::label('Localizacion') }}
            <select name="location_id" id="state" class="form-control input-sm">
                <option value="">
                    --Seleccione una Localizacion--
                </option>
                @foreach ($locations as $location)
                <option value={{ $location->id}}>
                    {{ $location->name}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('location_id'))
                <span class="error text-danger" 
                for="input-name">{{ $errors->first('location_id') }}</span>
            @endif
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>