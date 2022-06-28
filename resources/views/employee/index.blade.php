@extends('layouts.app', ['activePage' => 'employees', 'titlePage' => __('employees')])

@section('template_title')
    Employee
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Registro Empleados</h4>
                            <p class="card-category">Registro de Empleados</p>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('employees.create') }}" class="btn btn-sm"  data-placement="left">
                                        Añadir Empleado
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>ID</th>
                                            <th>Dni</th>
                                            <th>Nombre</th>
                                            <th>Genero</th>
                                            <th>Posicion</th>
                                            <th>Compañia</th>
                                            <th>Departamento</th>
                                            <th>Localizacion</th>
                                            <th class="text-right">Acciones</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $employee->dni }}</td>
                                                <td>{{ $employee->first_lastname . " " . $employee->second_lastname }}</td>
                                                <td>{{ $employee->gender }}</td>
                                                <td>{{ $employee->positions->name }}</td>
                                                <td>{{ $employee->branchs->name }}</td>
                                                <td>{{ $employee->departaments->name }}</td>
                                                <td>{{ $employee->locations->name }}</td>

                                                <td class="td-actions text-right">
                                                    <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('employees.show',$employee->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-primary btn-circle btn-sm" href="{{ route('employees.edit',$employee->id) }}"><i class="fa fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este registro?')"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $employees->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
