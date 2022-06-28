@extends('layouts.app', ['activePage' => 'positions', 'titlePage' => __('positions')])

@section('template_title')
    Position
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Registro Cargos</h4>
                        </div>
                        

                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div class="float-right">
                                <a href="{{ route('positions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>No</th>
                                            
                                            <th>Name</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($positions as $position)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $position->name }}</td>

                                                <td class="td-actions text-right">
                                                    <form action="{{ route('positions.destroy',$position->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-success" href="{{ route('positions.edit',$position->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $positions->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
