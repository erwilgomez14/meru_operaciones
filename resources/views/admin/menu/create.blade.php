@extends('panel.layouts.page')

@section('content')
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">
                    @if (session('status'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>{{ session('status') }}</strong>
                        </div>

                        <script>
                            $(".alert").alert();
                        </script>
                    @endif
                    <div class="col-lg-12 col-12  layout-spacing mt-3">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header bg-info">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Crear menus</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    @include('admin.menu.form')
                                    <input type="submit" name="time" class="btn btn-primary" value="Guardar">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
