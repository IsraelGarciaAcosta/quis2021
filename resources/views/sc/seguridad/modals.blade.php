<!-- Modal SALIR SIN GUARDAR-->
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


<!-- Modal ELIMINAR-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirmación</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
                <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el registro?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" id="btnEliminarRegistro" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal SEGURIDAD-->
<div class="modal fade" id="createRevisionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createRevisionModalLabel">Nueva revisión</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_revision']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_revision', null, ['id' => 'empresaid_revision']) !!}
        {!! Form::hidden('id_revision', null, ['id' => 'id_revision']) !!}
        
        <div class="form-group">
            {!! Form::label('no1', '1. Fecha de revisión', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no1', null, ['class' => 'form-control', 'id' => 'no1']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('no2', '2. Protocolo Prueba de seguridad pegado en un lugar visible', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no2', 'Si', null, ['class' => 'mr-1', 'id' => 'no2_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no2', 'No', null, ['class' => 'mr-1', 'id' => 'no2_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('no3', '3. Protocolo de falla eléctrica pegado en un lugar visible ', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no3', 'Si', null, ['class' => 'mr-1', 'id' => 'no3_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no3', 'No', null, ['class' => 'mr-1', 'id' => 'no3_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('no4', '4. Recepción de Red fría pegado en un lugar visible', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no4', 'Si', null, ['class' => 'mr-1', 'id' => 'no4_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no4', 'No', null, ['class' => 'mr-1', 'id' => 'no4_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('no5', '5. Protocolo Cadena de frio, pegado en un lugar visible ', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no5', 'Si', null, ['class' => 'mr-1', 'id' => 'no5_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no5', 'No', null, ['class' => 'mr-1', 'id' => 'no5_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" >
            {!! Form::label('no6', '6. En la Farmacia existe una extensión eléctrica de al menos 20 metros, para el Protocolo de falla eléctrica', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no6', 'Si', null, ['class' => 'mr-1', 'id' => 'no6_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no6', 'No', null, ['class' => 'mr-1', 'id' => 'no6_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('no7', '7. Fecha en que se probó la planta de respaldo eléctrico', ['class' => 'form-label']) !!}
            {!! Form::textarea('no7', null, ['class' => 'form-control', 'id' => 'no7', 'placeholder' => 'Ingrese fechas (dd-mmm-aaaa). Enumerarlas']) !!}
        </div>

        <div class="form-group" >
            {!! Form::label('no8', '8. La planta de respaldo eléctrico funciona adecuadamente', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no8', 'Si', null, ['class' => 'mr-1', 'id' => 'no8_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no8', 'No', null, ['class' => 'mr-1', 'id' => 'no8_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('no9', '9. Fecha en que se probó la alarma de Farmacia', ['class' => 'form-label']) !!}
            {!! Form::textarea('no9', null, ['class' => 'form-control', 'id' => 'no9', 'placeholder' => 'Ingrese fechas (dd-mmm-aaaa). Enumerarlas']) !!}
        </div>

        <div class="form-group" >
            {!! Form::label('no10', '10. La alarma de Farmacia funciona adecuadamente', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no10', 'Si', null, ['class' => 'mr-1', 'id' => 'no10_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no10', 'No', null, ['class' => 'mr-1', 'id' => 'no10_no']) !!}
                  No
              </label>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGRevision" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>





<!-- Modal CADENA DE FRIO-->
<div class="modal fade" id="createCadenaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createCadenaModalLabel">Nueva cadena de frío</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_cadena']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_cadena', null, ['id' => 'empresaid_cadena']) !!}
        {!! Form::hidden('id_cadena', null, ['id' => 'id_cadena']) !!}
        
        <div class="form-group">
            {!! Form::label('no11', '11. Fecha en que se montó la Cadena de frío', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no11', null, ['class' => 'form-control', 'id' => 'no11']) !!}
            </div>
        </div>

        <div class="form-group" >
            {!! Form::label('no12', '12. Hubo desviaciones de temperatura durante la cadena de frío', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no12', 'Si', null, ['class' => 'mr-1', 'id' => 'no12_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no12', 'No', null, ['class' => 'mr-1', 'id' => 'no12_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" >
            {!! Form::label('no13', '13. Responsable de la cadena de frío', ['class' => 'form-label']) !!}
            {!! Form::select('no13', $empleados, null, ['class' => 'form-control', 'id' => 'no13', 'placeholder' => 'Seleccione...']) !!}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGCadena" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>


