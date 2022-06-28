@extends('layouts.app', ['activePage' => 'employees', 'titlePage' => __('employess')])

@section('template_title')
    Registrar  Empleados
@endsection

@section('content')
    <div class="content">
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @includeif('partials.errors')

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Registrar  Empleados</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>
                        <div class="card-body">
                                <form method="POST" action="{{ route('employees.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf

                                    @include('employee.form')
                                    

                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
