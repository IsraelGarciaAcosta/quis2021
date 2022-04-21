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



<!-- Modal CREAR INTEGRIDAD-->
<div class="modal fade" id="createIntegridadModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createIntegridadModalLabel">Integridad</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_integridad']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_integridad', null, ['id' => 'empresaid_integridad']) !!}
        {!! Form::hidden('proyectoid_integridad', null, ['id' => 'proyectoid_integridad']) !!}
        {!! Form::hidden('id_integridad', null, ['id' => 'id_integridad']) !!}
        
        <div class="form-group">
            {!! Form::label('no1', '1. Fecha de recepción', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no1', null, ['class' => 'form-control', 'id' => 'no1']) !!}
            </div>
        </div>

        <div class="form-group" id="div2">
            {!! Form::label('no2', '2. Se recibió el paquete en buenas condiciones', ['class' => 'form-label']) !!}
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
            {!! Form::label('no3', '3. Especifique las alteraciones', ['class' => 'form-label']) !!}
            {!! Form::textarea('no3', null, ['class' => 'form-control', 'id' => 'no3', 'placeholder' => 'Ingrese alteraciones']) !!}
        </div>

        <div class="form-group" id="div4">
            {!! Form::label('no4', '4. Fecha en que se confirmó de recibido', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no4', null, ['class' => 'form-control', 'id' => 'no4']) !!}
            </div>
        </div>

        <div class="form-group" id="div5">
            {!! Form::label('no5', '5. Se archivó el comprobante de recepción en el expediente de la investigación', ['class' => 'form-label']) !!}
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
            {!! Form::label('no6', '6. Tipo de producto que se recibe', ['class' => 'form-label']) !!}
            {!! Form::select('no6', ['Medicamento o producto de investigación' => 'Medicamento o producto de investigación', 'Materiales' => 'Materiales', 'Equipos' => 'Equipos'], null, ['class' => 'form-control', 'id' => 'no6', 'placeholder' => 'Seleccione...']) !!}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGIntegridad" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>




<!-- Modal CREAR ENTRADAS-->
<div class="modal fade" id="createEntradaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createEntradaModalLabel">Entrada de producto</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_entrada']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_entrada', null, ['id' => 'empresaid_entrada']) !!}
        {!! Form::hidden('proyectoid_entrada', null, ['id' => 'proyectoid_entrada']) !!}
        {!! Form::hidden('id_entrada', null, ['id' => 'id_entrada']) !!}
        
        <div class="form-group">
            {!! Form::label('no7', '7. Fecha de recepción', ['class' => 'form-label']) !!}
            {!! Form::select('no7', $fechas, null, ['class' => 'form-control', 'id' => 'no7', 'placeholder' => 'Seleccione...']) !!}
        </div>

        <div class="form-group" id="div8">
            {!! Form::label('no8', '8. Nombres genéricos', ['class' => 'form-label']) !!}
            {!! Form::textarea('no8', null, ['class' => 'form-control', 'id' => 'no8', 'placeholder' => 'Ingrese nombres']) !!}
        </div>

        <div class="form-group" id="div9">
            {!! Form::label('no9', '9. Nombre comercial', ['class' => 'form-label']) !!}
            {!! Form::text('no9', null, ['class' => 'form-control', 'id' => 'no9', 'placeholder' => 'Ingrese nombre']) !!}
        </div>

        <div class="form-group" id="div10">
            {!! Form::label('no10', '10. Forma farmacéutica', ['class' => 'form-label']) !!}
            {!! Form::select('no10', ['Aerosol' => 'Aerosol', 'Cápsula' => 'Cápsula', 'Colirio – clara y solamente para uso ocular' => 'Colirio – clara y solamente para uso ocular', 'Crema' => 'Crema', 'Elíxir – solución hidro-alcohólica' => 'Elíxir – solución hidro-alcohólica', 'Emulsión – sistema heterogéneo de dos líquidos para uso inyectable' => 'Emulsión – sistema heterogéneo de dos líquidos para uso inyectable', 'Espuma' => 'Espuma', 'Gel' => 'Gel', 'Goma de mascar' => 'Goma de mascar', 'Granulado' => 'Granulado', 'Implante' => 'Implante', 'Jalea' => 'Jalea', 'Jarabe – solución con alta concentración de carbohidratos' => 'Jarabe – solución con alta concentración de carbohidratos', 'Laminilla' => 'Laminilla', 'Linimento ' => 'Linimento ', 'Loción' => 'Loción', 'Oblea' => 'Oblea', 'Óvulo' => 'Óvulo', 'Parche' => 'Parche', 'Pasta' => 'Pasta', 'Pastilla – moldeada en azúcar para ser disuelta en la boca' => 'Pastilla – moldeada en azúcar para ser disuelta en la boca', 'Polvo' => 'Polvo', 'Sistema de liberación' => 'Sistema de liberación', 'Solución' => 'Solución', 'Supositorio' => 'Supositorio', 'Suspensión' => 'Suspensión', 'Tableta o comprimido' => 'Tableta o comprimido', 'Ungüento' => 'Ungüento'], null, ['class' => 'form-control', 'id' => 'no10', 'placeholder' => 'Seleccione...']) !!}
        </div>

        <div class="form-group" id="div11">
            {!! Form::label('no11', '11. Grupo', ['class' => 'form-label']) !!}
            {!! Form::select('no11', ['Grupo I – Estupefacientes' => 'Grupo I – Estupefacientes', 'Grupo II – Psicotrópicos' => 'Grupo II – Psicotrópicos', 'Grupo III – Psicotrópicos' => 'Grupo III – Psicotrópicos', 'Grupo IV' => 'Grupo IV', 'Grupo V' => 'Grupo V', 'Grupo VI' => 'Grupo VI'], null, ['class' => 'form-control', 'id' => 'no11', 'placeholder' => 'Seleccione...']) !!}
        </div>

        <div class="form-group" id="div12">
            {!! Form::label('no12', '12. Dosis por unidad', ['class' => 'form-label']) !!}
            {!! Form::text('no12', null, ['class' => 'form-control', 'id' => 'no12', 'placeholder' => 'Ingrese dosis']) !!}
        </div>

        <div class="form-group" id="div13">
            {!! Form::label('no13', '13. Unidades de medición', ['class' => 'form-label']) !!}
            {!! Form::select('no13', ['mg' => 'mg', 'ml' => 'ml', 'Ul' => 'Ul'], null, ['class' => 'form-control', 'id' => 'no13', 'placeholder' => 'Seleccione...']) !!}
        </div>

        <div class="form-group" id="div14">
            {!! Form::label('no14', '14. Condiciones de almacén requeridas', ['class' => 'form-label']) !!}
            {!! Form::select('no14', ['Temperatura ambiente' => 'Temperatura ambiente', 'Refrigeración' => 'Refrigeración', 'Congelación' => 'Congelación'], null, ['class' => 'form-control', 'id' => 'no14', 'placeholder' => 'Seleccione...']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('no15', '15. Fecha de caducidad', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no15', null, ['class' => 'form-control', 'id' => 'no15']) !!}
            </div>
        </div>

        <div class="form-group" id="div16">
            {!! Form::label('no16', '16. Lote', ['class' => 'form-label']) !!}
            {!! Form::text('no16', null, ['class' => 'form-control', 'id' => 'no16', 'placeholder' => 'Ingrese lote']) !!}
        </div>

        <div class="form-group" id="div17">
            {!! Form::label('no17', '17. Número de kit', ['class' => 'form-label']) !!}
            {!! Form::text('no17', null, ['class' => 'form-control', 'id' => 'no17', 'placeholder' => 'Ingrese número']) !!}
        </div>

        <div class="form-group" id="div18">
            {!! Form::label('no18', '18. Cantidad de unidades en el kit', ['class' => 'form-label']) !!}
            {!! Form::text('no18', null, ['class' => 'form-control', 'id' => 'no18', 'placeholder' => 'Ingrese cantidad']) !!}
        </div>

        <div class="form-group" id="div19">
            {!! Form::label('no19', '19. Número de equipo en que se almacenó', ['class' => 'form-label']) !!}
            {!! Form::text('no19', null, ['class' => 'form-control', 'id' => 'no19', 'placeholder' => 'Ingrese número']) !!}
        </div>

        <div class="form-group" id="div20">
            {!! Form::label('no20', '20. Fecha de entrada', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no20', null, ['class' => 'form-control', 'id' => 'no20']) !!}
            </div>
        </div>

        <div class="form-group" id="div21">
            {!! Form::label('no21', '21. Cantidad mínima requerida en inventario', ['class' => 'form-label']) !!}
            {!! Form::text('no21', null, ['class' => 'form-control', 'id' => 'no21', 'placeholder' => 'Ingrese cantidad']) !!}
        </div>

        <div class="form-group" id="div22">
            {!! Form::label('no22', '22. Dio de alta el producto al IWRS', ['class' => 'form-label']) !!}
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
            {!! Form::label('no23', '23. Fecha de alta al IVRS', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no23', null, ['class' => 'form-control', 'id' => 'no23']) !!}
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGEntrada" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>





<!-- Modal CREAR MATERIALES-->
<div class="modal fade" id="createMaterialModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createMaterialModalLabel">Materiales</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_material']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_material', null, ['id' => 'empresaid_material']) !!}
        {!! Form::hidden('proyectoid_material', null, ['id' => 'proyectoid_material']) !!}
        {!! Form::hidden('id_material', null, ['id' => 'id_material']) !!}
        
        <div class="form-group">
            {!! Form::label('no24', '24. Fecha de recepción', ['class' => 'form-label']) !!}
            {!! Form::select('no24', $fechas, null, ['class' => 'form-control', 'id' => 'no24', 'placeholder' => 'Seleccione...']) !!}
        </div>

        <div class="form-group" id="div25">
            {!! Form::label('no25', '25. Número del gabinete de la investigación', ['class' => 'form-label']) !!}
            <select class="form-control" name="no25" id="no25">
              <option value="">Seleccione...</option>
              <?php
              for($a=1; $a<=14; $a++){
                if($a<=9){
                  echo "<option>0".$a."A</option>";
                  echo "<option>0".$a."B</option>";
                  echo "<option>0".$a."C</option>";
                }else{
                  echo "<option>".$a."A</option>";
                  echo "<option>".$a."B</option>";
                  echo "<option>".$a."C</option>";
                }
              }
              ?>
            </select>
        </div>

        <div class="form-group" id="div26">
            {!! Form::label('no26', '26. Número del anaquel donde se guardó el material de transporte', ['class' => 'form-label']) !!}
            {!! Form::hidden('no26', null, ['id' => 'no26']) !!}
            <div>
              Anaquel &nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('anaquel', '1', null, ['class' => 'mr-1', 'id' => 'anaquel_1']) !!}
                  1
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('anaquel', '2', null, ['class' => 'mr-1', 'id' => 'anaquel_2']) !!}
                  2
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('anaquel', '3', null, ['class' => 'mr-1', 'id' => 'anaquel_3']) !!}
                  3
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('anaquel', '4', null, ['class' => 'mr-1', 'id' => 'anaquel_4']) !!}
                  4
              </label>
            </div>
            <div>
              Repisa &nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('repisa', 'A', null, ['class' => 'mr-1', 'id' => 'repisa_A']) !!}
                  A
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('repisa', 'B', null, ['class' => 'mr-1', 'id' => 'repisa_B']) !!}
                  B
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('repisa', 'C', null, ['class' => 'mr-1', 'id' => 'repisa_C']) !!}
                  C
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('repisa', 'D', null, ['class' => 'mr-1', 'id' => 'repisa_D']) !!}
                  D
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('repisa', 'E', null, ['class' => 'mr-1', 'id' => 'repisa_E']) !!}
                  E
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('repisa', 'F', null, ['class' => 'mr-1', 'id' => 'repisa_F']) !!}
                  F
              </label>
            </div>
            <div>
              Espacio &nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('espacio', '1', null, ['class' => 'mr-1', 'id' => 'espacio_1']) !!}
                  1
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('espacio', '2', null, ['class' => 'mr-1', 'id' => 'espacio_2']) !!}
                  2
              </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                {!! Form::radio('espacio', '3', null, ['class' => 'mr-1', 'id' => 'espacio_3']) !!}
                  3
              </label>
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGMaterial" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>





<!-- Modal CREAR EQUIPO-->
<div class="modal fade" id="createEquipoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createEquipoModalLabel">Equipos</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_equipo']) !!}
      <div class="modal-body">
        {!! Form::hidden('empresaid_equipo', null, ['id' => 'empresaid_equipo']) !!}
        {!! Form::hidden('proyectoid_equipo', null, ['id' => 'proyectoid_equipo']) !!}
        {!! Form::hidden('id_equipo', null, ['id' => 'id_equipo']) !!}
        
        <div class="form-group">
            {!! Form::label('no27', '27. Fecha de recepción', ['class' => 'form-label']) !!}
            {!! Form::select('no27', $fechas, null, ['class' => 'form-control', 'id' => 'no27', 'placeholder' => 'Seleccione...']) !!}
        </div>

        <div class="form-group" id="div28">
            {!! Form::label('no28', '28. Nombre del equipo', ['class' => 'form-label']) !!}
            {!! Form::text('no28', null, ['class' => 'form-control', 'id' => 'no28', 'placeholder' => 'Ingrese nombre']) !!}
        </div>

        <div class="form-group" id="div29">
            {!! Form::label('no29', '29. Descripción', ['class' => 'form-label']) !!}
            {!! Form::textarea('no29', null, ['class' => 'form-control', 'id' => 'no29', 'placeholder' => 'Ingrese descripción']) !!}
        </div>

        <div class="form-group" id="div30">
            {!! Form::label('no30', '30. Lugar de almacén', ['class' => 'form-label']) !!}
            {!! Form::select('no30', ['Archivero del estudio' => 'Archivero del estudio', 'Mesa de exploración del consultorio médico' => 'Mesa de exploración del consultorio médico'], null, ['class' => 'form-control', 'id' => 'no30', 'placeholder' => 'Seleccione...']) !!}
        </div>

        <div class="form-group" id="div31">
            {!! Form::label('no31', '31. Fecha de ingreso', ['class' => 'form-label']) !!}
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                {!! Form::date('no31', null, ['class' => 'form-control', 'id' => 'no31']) !!}
            </div>
        </div>

        <div class="form-group" id="div32">
            {!! Form::label('no32', '32. Observaciones', ['class' => 'form-label']) !!}
            {!! Form::textarea('no32', null, ['class' => 'form-control', 'id' => 'no32', 'placeholder' => 'Ingrese observaciones']) !!}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGEquipo" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

