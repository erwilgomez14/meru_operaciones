@extends('panel.layouts.page')

@section('titulo')
    Sistema Menus
@endsection

@section('scripts')
    <script src="{{ asset('template/assets/js/pages/menu/crear.js') }}" type="text/javascripts"></script>
@endsection

@section('content')
    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <div class="card">
                        <div class="card-header bg-outline-danger">
                            <h5 class="text-dark float-left pt-2">Editar menu {{ $data->nombre }}</h5>
                            <a href="{{ route('menu') }}" class="btn btn-outline-light btn-sm float-right">Volver al
                                listado</a>
                        </div>
                        <form action="{{ route('menu.actualizar', $data->id) }}" id="form-general" class="form-horizontal"
                            method="POST">
                            @csrf @method('put')
                            <div class="card-body">
                                @include('admin.menu.form')
                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3"><button type="submit" class="btn btn-success">Actualizar</button></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
