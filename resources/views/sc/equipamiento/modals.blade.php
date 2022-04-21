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



<!-- Modal CREAR EQUIPAMIENTO-->
<div class="modal fade" id="createEquipamientoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createEquipamientoModalLabel">Materiales y Equipamiento</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_equipamiento']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_equipamiento', null, ['id' => 'empresaid_equipamiento']) !!}
        {!! Form::hidden('proyectoid_equipamiento', null, ['id' => 'proyectoid_equipamiento']) !!}
        {!! Form::hidden('id_equipamiento', null, ['id' => 'id_equipamiento']) !!}
        
        <div class="form-group">
            {!! Form::label('no1', '1. Fecha de revisión', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no1', null, ['class' => 'form-control', 'id' => 'no1']) !!}
            </div>
        </div>

        <div class="form-group" id="div2">
            {!! Form::label('no2', '2. Existe un lugar destinado y señalado para el almacén del medicamento devuelto, utilizado o caduco', ['class' => 'form-label']) !!}
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

        <div class="form-group" id="div3">
            {!! Form::label('no3', '3. El termo-higrómetro, que registra la temperatura y humedad ambiental de la Farmacia, funciona adecuadamente', ['class' => 'form-label']) !!}
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

        <div class="form-group" id="div4">
            {!! Form::label('no4', '4. Espátula para conteo de tabletas', ['class' => 'form-label']) !!}
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

        <div class="form-group" id="div5">
            {!! Form::label('no5', '5. Báscula para pesar los líquidos', ['class' => 'form-label']) !!}
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

        <div class="form-group" id="div6">
            {!! Form::label('no6', '6. Bolsas de plástico transparente, para entrega de medicamentos', ['class' => 'form-label']) !!}
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

        <div class="form-group" id="div7">
            {!! Form::label('no7', '7. Sello fechador', ['class' => 'form-label']) !!}
            {!! Form::textarea('sello', 'Razón social o nombre del establecimiento, Dirección de la Farmacia, Nombre del Responsable de la Farmacia, Siglas de la profesión del Responsable de la Farmacia, Número de cédula profesional, Número de autorización de Responsable, Horario de asistencia del Responsable', ['class' => 'form-control', 'readonly']) !!}
            <div>
              <label>
                {!! Form::radio('no7', 'Si', null, ['class' => 'mr-1', 'id' => 'no7_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no7', 'No', null, ['class' => 'mr-1', 'id' => 'no7_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div8">
            {!! Form::label('no8', '8. Tres libros de control para medicamentos del Grupo I, II y III', ['class' => 'form-label']) !!}
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

        <div class="form-group" id="div9">
            {!! Form::label('no9', '9. Copia actualizada de la Ley General de Salud', ['class' => 'form-label']) !!}
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
            {!! Form::label('no10', '10. Copia actualizada de la farmacopea de los Estados Unidos Mexicanos', ['class' => 'form-label']) !!}
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
            {!! Form::label('no11', '11. Programa de capacitación disponible para los Farmacistas', ['class' => 'form-label']) !!}
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
            {!! Form::label('no12', '12. El mobiliario es resistente a los agentes limpiadores', ['class' => 'form-label']) !!}
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
            {!! Form::label('no13', '13. Los equipos están en buenas condiciones', ['class' => 'form-label']) !!}
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
            {!! Form::label('no14', '14. Se cumple el programa de calibración de equipos e instrumentos', ['class' => 'form-label']) !!}
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
            {!! Form::label('no15', '15. Todas las gavetas y equipos de almacén pueden cerrarse con llave', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no15', 'Si', null, ['class' => 'mr-1', 'id' => 'no15_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no15', 'No', null, ['class' => 'mr-1', 'id' => 'no15_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div16">
            {!! Form::label('no16', '16. El refrigerador está limpio y ordenado y se utiliza exclusivamente para medicamentos y muestras biológicas', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no16', 'Si', null, ['class' => 'mr-1', 'id' => 'no16_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no16', 'No', null, ['class' => 'mr-1', 'id' => 'no16_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div17">
            {!! Form::label('no17', '17. El termómetro del refrigerador funciona adecuadamente', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no17', 'Si', null, ['class' => 'mr-1', 'id' => 'no17_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no17', 'No', null, ['class' => 'mr-1', 'id' => 'no17_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div18">
            {!! Form::label('no18', '18. El termómetro del refrigerador puede leerse desde el exterior del equipo', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no18', 'Si', null, ['class' => 'mr-1', 'id' => 'no18_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no18', 'No', null, ['class' => 'mr-1', 'id' => 'no18_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div19">
            {!! Form::label('no19', '19. El congelador está limpio y ordenado, y se utiliza exclusivamente para medicamentos y muestras biológicas', ['class' => 'form-label']) !!}
            <div>
              <label>
                {!! Form::radio('no19', 'Si', null, ['class' => 'mr-1', 'id' => 'no19_si']) !!}
                  Si
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('no19', 'No', null, ['class' => 'mr-1', 'id' => 'no19_no']) !!}
                  No
              </label>
            </div>
        </div>

        <div class="form-group" id="div20">
            {!! Form::label('no20', '20. El termómetro del congelador funciona adecuadamente', ['class' => 'form-label']) !!}
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
            {!! Form::label('no21', '21. El termómetro del congelador puede leerse desde el exterior del equipo', ['class' => 'form-label']) !!}
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
            {!! Form::label('no22', '22. Cada refrigerador y congelador tiene un señalamiento con la leyenda “En caso de falla de energía, NO ABRA LA PUERTA. La temperatura puede mantenerse hasta por 90 minutos.”, impresa en fondo fosforescente, y pegada cerca del candado', ['class' => 'form-label']) !!}
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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGEquipamiento" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

