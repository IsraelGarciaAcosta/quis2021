@extends('adminlte::page')

@section('title', 'Menús')

@section('content_header')
<h4 class="m-0">Nuevo Menú</h4>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'menus.store', 'autocomplete' => 'off']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Nombre', ['class' => 'form-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del menú']) !!}
                
                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

				<div class="form-group">
                    {!! Form::label('description', 'Descripción', ['class' => 'form-label']) !!}
                    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción']) !!}
                </div>

                <div class="form-group">
                    <p class="font-weight-bold">Usuarios que tendrán acceso al menú</p>
                    @foreach ($users as $user)
                        <label class="mr-2">
                            {!! Form::checkbox('users[]', $user->id, null) !!}
                            {{$user->name}}
                        </label><br/>
                    @endforeach
                </div>

                <div align="right">
                    <a href="#" onclick="Salir();" class="btn btn-danger">Cancelar</a>
                    {!! Form::submit('Guardar menú', ['class' => 'btn btn-primary']) !!}
                </div>
                

            {!! Form::close() !!}
        </div>
    </div>



    <!-- Modal-->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmModalLabel">Confirmación</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
                <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
        ¿Desea salir sin guardar la información?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" id="btnCancelar" data-bs-toggle="modal" data-bs-target="#confirmModal" name="btnCancelar" class="btn btn-danger">Salir sin guardar</button>
      </div>
    </div>
  </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <script>
    function Salir(){
        $('#confirmModal').modal('show');
    }

    $('#btnCancelar').click(function(){
        window.location.href = "/menus";
    })
    </script>
@stop