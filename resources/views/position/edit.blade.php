@extends('layouts.app', ['activePage' => 'positions', 'titlePage' => __('positions')])

@section('template_title')
    Update Position
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Crear Cargo</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('positions.update', $position->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('position.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
