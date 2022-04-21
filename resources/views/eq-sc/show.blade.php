@extends('adminlte::page')

@section('title', 'Sitio Clínico')

@section('content_header')
@include('eq-sc.resume')
@stop

@section('content')
<div class="div_space">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="overlay-wrapper col-md-12">
                    <div class="overlay" id="overlay" style="position:fixed; display:none">
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                        <div class="text-bold pt-2"> Guardando...</div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3"></h3>
                                <ul class="nav nav-pills ml-auto p-2">
                                    <li class="nav-item"><a class="nav-link" href="#tab_1" data-toggle="tab">Factibilidad</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Sometimiento</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Farmacia</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Reclutamiento</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Conducción</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_6" data-toggle="tab">Cierre</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab_1">
                                        @include('eq-sc.form_factibilidad')
                                    </div>

                                    <div class="tab-pane" id="tab_2">
                                        @include('eq-sc.form_sometimiento')
                                    </div>

                                    <div class="tab-pane" id="tab_3">
                                        TRES
                                    </div>

                                    <div class="tab-pane" id="tab_4">
                                        CUATRO
                                    </div>

                                    <div class="tab-pane" id="tab_5">
                                        CINCO
                                    </div>

                                    <div class="tab-pane" id="tab_6">
                                        SEIS
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--MODALS-->


@stop

{{--@section('footer')
    @include('eq-sc.resume')
@stop--}}

@section('css')
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="{{ asset('js/sc/factibilidad.js?1') }}"></script>
@stop