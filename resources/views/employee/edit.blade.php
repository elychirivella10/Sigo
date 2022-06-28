@extends('layouts.app', ['activePage' => 'departaments', 'titlePage' => __('departaments')])

@section('template_title')
    Update Employee
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Actualizar Empleado</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('employees.update', $employee->id) }}"  role="form" enctype="multipart/form-data">
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
