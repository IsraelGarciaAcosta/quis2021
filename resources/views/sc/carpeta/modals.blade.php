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



<!-- Modal CREAR FARMACISTA-->
<div class="modal fade" id="createFarmacistaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createFarmacistaModalLabel">Nuevo farmacista</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_farmacista']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_farmacista', null, ['id' => 'empresaid_farmacista']) !!}
        {!! Form::hidden('carpetaid_farmacista', null, ['id' => 'carpetaid_farmacista']) !!}
        {!! Form::hidden('id_farmacista', null, ['id' => 'id_farmacista']) !!}
        
        <div class="form-group">
            {!! Form::label('no7', '7. Nombre del Farmacista', ['class' => 'form-label']) !!}
            {!! Form::text('no7', null, ['class' => 'form-control', 'id' => 'no7', 'placeholder' => 'Ingrese nombre']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('no8', '8. Fecha de inicio de responsabilidades', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no8', null, ['class' => 'form-control', 'id' => 'no8']) !!}
            </div>
        </div>

        <div class="form-group" id="div9">
            {!! Form::label('no9', 'Integrar la Carpeta de control de la Farmacia', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no9', 'Si', null, ['class' => 'mr-1', 'id' => 'no9_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no9', 'No', null, ['class' => 'mr-1', 'id' => 'no9_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div10">
            {!! Form::label('no10', '10. Verificar el cumplimiento normativo', ['class' => 'form-label']) !!}
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

        <div class="form-group" id="div11">
            {!! Form::label('no11', '11. Realizar el control diario de temperatura', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no11', 'Si', null, ['class' => 'mr-1', 'id' => 'no11_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no11', 'No', null, ['class' => 'mr-1', 'id' => 'no11_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div12">
            {!! Form::label('no12', '12. Recibir, controlar y dispensar el producto', ['class' => 'form-label']) !!}
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

        <div class="form-group" id="div13">
            {!! Form::label('no13', '13. Realizar auditorías', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no13', 'Si', null, ['class' => 'mr-1', 'id' => 'no13_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no13', 'No', null, ['class' => 'mr-1', 'id' => 'no13_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div14">
            {!! Form::label('no14', '14. Atender visitas de verificación', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no14', 'Si', null, ['class' => 'mr-1', 'id' => 'no14_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no14', 'No', null, ['class' => 'mr-1', 'id' => 'no14_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div15">
            {!! Form::label('no15', '15. Firma del Farmacista', ['class' => 'form-label']) !!}
            {!! Form::text('no15', null, ['class' => 'form-control', 'id' => 'no15', 'placeholder' => 'Ingrese firma']) !!}
        </div>

        <div class="form-group" id="div16">
            {!! Form::label('no16', '16. Fecha de firma de responsabilidades', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no16', null, ['class' => 'form-control', 'id' => 'no16']) !!}
            </div>
        </div>

        <div class="form-group" id="div17">
            {!! Form::label('no17', '17. Fecha de capacitación', ['class' => 'form-label']) !!}
            {!! Form::textarea('no17', null, ['class' => 'form-control', 'id' => 'no17', 'placeholder' => 'Ingrese fechas enumeradas (dd-mmm-aaaa)']) !!}
        </div>

        <div class="form-group" id="div18">
            {!! Form::label('no18', '18. Fecha de fin de responsabilidades', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no18', null, ['class' => 'form-control', 'id' => 'no18']) !!}
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGFarmacista" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>





<!-- Modal CREAR CONTROL-->
<div class="modal fade" id="createControlModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createControlModalLabel">Nueva revisión</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_control']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_control', null, ['id' => 'empresaid_control']) !!}
        {!! Form::hidden('carpetaid_control', null, ['id' => 'carpetaid_control']) !!}
        {!! Form::hidden('id_control', null, ['id' => 'id_control']) !!}
        
        <div class="form-group">
            {!! Form::label('no19', '19. Fecha de revisión', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no19', null, ['class' => 'form-control', 'id' => 'no19']) !!}
            </div>
        </div>

        <div class="form-group" id="div20">
            {!! Form::label('no20', '20. Se identifica con FC Carpeta Farmacia', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no20', 'Si', null, ['class' => 'mr-1', 'id' => 'no20_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no20', 'No', null, ['class' => 'mr-1', 'id' => 'no20_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div21">
            {!! Form::label('no21', '21. Almacena medicamentos controlados o productos de origen biológico', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no21', 'Si', null, ['class' => 'mr-1', 'id' => 'no21_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no21', 'No', null, ['class' => 'mr-1', 'id' => 'no21_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div22">
            {!! Form::label('no22', '22. Contiene copia del Aviso de funcionamiento', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no22', 'Si', null, ['class' => 'mr-1', 'id' => 'no22_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no22', 'No', null, ['class' => 'mr-1', 'id' => 'no22_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div23">
            {!! Form::label('no23', '23. Contiene copia de la Licencia sanitaria', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no23', 'Si', null, ['class' => 'mr-1', 'id' => 'no23_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no23', 'No', null, ['class' => 'mr-1', 'id' => 'no23_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div24">
            {!! Form::label('no24', '24. FC Responsabilidades Farmacia, lleno y firmado por Responsable Sanitario y Farmacistas', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no24', 'Si', null, ['class' => 'mr-1', 'id' => 'no24_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no24', 'No', null, ['class' => 'mr-1', 'id' => 'no24_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div25">
            {!! Form::label('no25', '25. Contiene una copia del FC Organigrama de Farmacia, fechada y firmada por el Responsable Sanitario', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no25', 'Si', null, ['class' => 'mr-1', 'id' => 'no25_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no25', 'No', null, ['class' => 'mr-1', 'id' => 'no25_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div26">
            {!! Form::label('no26', '26. Contiene copia del FC Croquis de Farmacia, fechada y firmada por el Responsable Sanitario', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no26', 'Si', null, ['class' => 'mr-1', 'id' => 'no26_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no26', 'No', null, ['class' => 'mr-1', 'id' => 'no26_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div27">
            {!! Form::label('no27', '27. IT Farmacia, fechado y firmado por Responsable Sanitario en Portada', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no27', 'Si', null, ['class' => 'mr-1', 'id' => 'no27_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no27', 'No', null, ['class' => 'mr-1', 'id' => 'no27_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div28">
            {!! Form::label('no28', '28. PNOs Farmacia', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no28', 'Si', null, ['class' => 'mr-1', 'id' => 'no28_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no28', 'No', null, ['class' => 'mr-1', 'id' => 'no28_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div29">
            {!! Form::label('no29', '29. Evidencias documentales de cumplimiento del programa de capacitación  de todo el personal (constancias, calificaciones de cada examen escrito)', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no29', 'Si', null, ['class' => 'mr-1', 'id' => 'no29_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no29', 'No', null, ['class' => 'mr-1', 'id' => 'no29_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div30">
            {!! Form::label('no30', '30. Todos los Farmacistas cumplen el programa anual de capacitación', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no30', 'Si', null, ['class' => 'mr-1', 'id' => 'no30_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no30', 'No', null, ['class' => 'mr-1', 'id' => 'no30_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div31">
            {!! Form::label('no31', '31. Facturas o documentos que amparen la posesión legal de los medicamentos o insumos almacenados', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no31', 'Si', null, ['class' => 'mr-1', 'id' => 'no31_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no31', 'No', null, ['class' => 'mr-1', 'id' => 'no31_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div32">
            {!! Form::label('no32', '32. Recetas de antibióticos, medicamentos controlados y estupefacientes dispensados', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no32', 'Si', null, ['class' => 'mr-1', 'id' => 'no32_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no32', 'No', null, ['class' => 'mr-1', 'id' => 'no32_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div33">
            {!! Form::label('no33', '33. Cumplimiento del programa de control de fauna nociva, junto con una copia del Registro sanitario de productos utilizados', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no33', 'Si', null, ['class' => 'mr-1', 'id' => 'no33_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no33', 'No', null, ['class' => 'mr-1', 'id' => 'no33_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div34">
            {!! Form::label('no34', '34. Licencia Sanitaria del proveedor de control de la fauna nociva', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no34', 'Si', null, ['class' => 'mr-1', 'id' => 'no34_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no34', 'No', null, ['class' => 'mr-1', 'id' => 'no34_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div35">
            {!! Form::label('no35', '35. Órdenes de visitas de verificación sanitaria recibidas, con su acta correspondiente', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no35', 'Si', null, ['class' => 'mr-1', 'id' => 'no35_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no35', 'No', null, ['class' => 'mr-1', 'id' => 'no35_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div36">
            {!! Form::label('no36', '36. Avisos de previsiones para farmacias, de compra-venta de estupefacientes y de medicamentos que requieren receta o permiso especial, con fecha y firma del Responsable Sanitario', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no36', 'Si', null, ['class' => 'mr-1', 'id' => 'no36_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no36', 'No', null, ['class' => 'mr-1', 'id' => 'no36_no']) !!}
                  No
              </label>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGControl" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>







<!-- Modal CREAR TRAMITE-->
<div class="modal fade" id="createTramiteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createTramiteModalLabel">Nuevo trámite</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_tramite']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_tramite', null, ['id' => 'empresaid_tramite']) !!}
        {!! Form::hidden('carpetaid_tramite', null, ['id' => 'carpetaid_tramite']) !!}
        {!! Form::hidden('id_tramite', null, ['id' => 'id_tramite']) !!}
        
        <div class="form-group">
            {!! Form::label('no37', '37. Nombre del trámite', ['class' => 'form-label']) !!}
            {!! Form::text('no37', null, ['class' => 'form-control', 'id' => 'no37', 'placeholder' => 'Ingrese trámite']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('no38', '38. Fecha de entrada', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no38', null, ['class' => 'form-control', 'id' => 'no38']) !!}
            </div>
        </div>

        <div class="form-group" id="div39">
            {!! Form::label('no39', '39. Requiere respuesta', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no39', 'Si', null, ['class' => 'mr-1', 'id' => 'no39_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no39', 'No', null, ['class' => 'mr-1', 'id' => 'no39_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('no40', '40. Fecha de respuesta', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no40', null, ['class' => 'form-control', 'id' => 'no40']) !!}
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGTramite" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>





<!-- Modal CREAR VERIFICACION-->
<div class="modal fade" id="createVerificacionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createVerificacionModalLabel">Nueva verificación</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_verificacion']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_verificacion', null, ['id' => 'empresaid_verificacion']) !!}
        {!! Form::hidden('carpetaid_verificacion', null, ['id' => 'carpetaid_verificacion']) !!}
        {!! Form::hidden('id_verificacion', null, ['id' => 'id_verificacion']) !!}
        
        <div class="form-group">
            {!! Form::label('no41', '41. Fecha en que se recibe una visita de verificación', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no41', null, ['class' => 'form-control', 'id' => 'no41']) !!}
            </div>
        </div>

        <div class="form-group" id="div42">
            {!! Form::label('no42', '42. Observaciones recibidas', ['class' => 'form-label']) !!}
            {!! Form::textarea('no42', null, ['class' => 'form-control', 'id' => 'no42', 'placeholder' => 'Ingrese observaciones enumeradas']) !!}
        </div>

        <div class="form-group" id="div43">
            {!! Form::label('no43', '43. Fechas en que se resuelven la observaciones recibidas', ['class' => 'form-label']) !!}
            {!! Form::textarea('no43', null, ['class' => 'form-control', 'id' => 'no43', 'placeholder' => 'Ingrese fechas enumeradas dependiendo de observaciones (dd-mmm-aaaa)']) !!}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGVerificacion" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>





<!-- Modal CREAR ATENCION-->
<div class="modal fade" id="createAtencionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createAtencionModalLabel">Nueva atención</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_atencion']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_atencion', null, ['id' => 'empresaid_atencion']) !!}
        {!! Form::hidden('carpetaid_atencion', null, ['id' => 'carpetaid_atencion']) !!}
        {!! Form::hidden('id_atencion', null, ['id' => 'id_atencion']) !!}
        
        <div class="form-group">
            {!! Form::label('no44', '44. Fecha de la queja', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no44', null, ['class' => 'form-control', 'id' => 'no44']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('no45', '45. Motivo de la queja', ['class' => 'form-label']) !!}
            {!! Form::textarea('no45', null, ['class' => 'form-control', 'id' => 'no45', 'placeholder' => 'Ingrese motivo']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('no46', '46. Fecha de atención de la queja', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no46', null, ['class' => 'form-control', 'id' => 'no46']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('no47', '47. Firma del Responsable Sanitario', ['class' => 'form-label']) !!}
            {!! Form::text('no47', null, ['class' => 'form-control', 'id' => 'no47', 'placeholder' => 'Ingrese firma']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('no48', '48. Fecha de firma del Responsable Sanitario', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no48', null, ['class' => 'form-control', 'id' => 'no48']) !!}
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGAtencion" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>