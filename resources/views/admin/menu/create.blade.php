@extends('panel.layouts.page')

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">
                    
                    <div class="col-lg-12 col-12  layout-spacing mt-3">
                        @include('includes.alert-create-menu')
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header bg-info">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Crear menus</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form action="{{route('menu.guardar')}}" id="form-control" autocomplete="off" method="POST">
                                    @csrf
                                    @include('admin.menu.form')
                                    @include('includes.boton-form-crear')
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
