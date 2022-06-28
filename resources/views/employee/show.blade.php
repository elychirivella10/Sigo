@extends('layouts.app', ['activePage' => 'employees', 'titlePage' => __('employees')])

@section('template_title')
    {{ $employee->name ?? 'Show Employee' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Empleado</h4>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estatus:</strong>
                            {{ $employee->status }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $employee->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $employee->first_lastname . "" . $employee->second_lastname}}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $employee->gender }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $employee->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Posicion:</strong>
                            {{ $employee->positions->name }}
                        </div>
                        <div class="form-group">
                            <strong>Compañia:</strong>
                            {{ $employee->branchs->name}}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $employee->departaments->name  }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de admision:</strong>
                            {{ $employee->date_of_admission }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de egreso:</strong>
                            {{ $employee->date_of_egress }}
                        </div>
                        <div class="form-group">
                            <strong>Digitalizacion:</strong>
                            {{ $employee->digdoc }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de digitalizacion:</strong>
                            {{ $employee->date_of_digdoc }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $employee->observation }}
                        </div>
                        <div class="form-group">
                            <strong>Localizacion:</strong>
                            {{ $employee->locations->name }}
                        </div>
                        <div class="form-group">
                            <strong>Archivo:</strong>
                            <a class="btn btn-primary" href="/storage/{{ substr($employee->files,7) }}" alt="">
                                Documentos
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
