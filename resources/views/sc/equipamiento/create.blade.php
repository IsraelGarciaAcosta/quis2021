@extends('adminlte::page')

@section('title', 'Equipamiento')

@section('content_header')
<h4 class="m-0">Nuevo equipamiento</h4>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="overlay-wrapper col-md-12">
                    <div class="overlay" id="overlay" style="position:fixed; display:none">
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                        <div class="text-bold pt-2"> Guardando...</div>
                    </div>
                    
                        @include('sc/equipamiento.resume')

				        @include('sc/equipamiento.form')

                    <div align="right">
                        <a href="#" onclick="Salir();" class="btn btn-danger">Cancelar</a>
                        <!--<button type="button" onclick="Guardar();" class="btn btn-primary"><i class="fas fa-save"> Guardar equipamiento</i></button>-->
                    </div>

                </div>
            </div>
        </div>
    </div>

<!--MODALS-->
@include('sc/equipamiento.modals')

@stop

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
    <script src="{{ asset('js/sc/equipamiento.js?1') }}"></script>
@stop