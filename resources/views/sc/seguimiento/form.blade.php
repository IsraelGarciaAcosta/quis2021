    <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Factibilidad
            </h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-5 col-sm-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Menú de preguntas</h3>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav flex-column nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="vert-tabs-1-tab" data-toggle="pill" href="#vert-tabs-1" role="tab" aria-controls="vert-tabs-1" aria-selected="false"><i class="far fa-edit"></i> Cancelación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="list_seguimiento();" id="vert-tabs-2-tab" data-toggle="pill" href="#vert-tabs-2" role="tab" aria-controls="vert-tabs-2" aria-selected="false"><i class="far fa-edit"></i> Seguimiento</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vert-tabs-3-tab" data-toggle="pill" href="#vert-tabs-3" role="tab" aria-controls="vert-tabs-3" aria-selected="false"><i class="far fa-edit"></i> Selección</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vert-tabs-4-tab" data-toggle="pill" href="#vert-tabs-4" role="tab" aria-controls="vert-tabs-4" aria-selected="false"><i class="far fa-edit"></i> Fuentes y estrategias de reclutamiento</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vert-tabs-5-tab" data-toggle="pill" href="#vert-tabs-5" role="tab" aria-controls="vert-tabs-5" aria-selected="false"><i class="far fa-edit"></i> Evaluación de la calidad</a>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
              
              <div class="col-7 col-sm-9 border-left">
                <div class="tab-content" id="vert-tabs-tabContent">

                  <!--CANCELACION-->
                  <div class="tab-pane fade show active" id="vert-tabs-1" role="tabpanel" aria-labelledby="vert-tabs-1-tab">
                    <?php
                        $user_id=auth()->id(); 
                    ?>

                    <div class="row">

                    <div class="col-md-6">
                    <div class="form-group" id="div40">
                        {!! Form::hidden('user_id', $user_id, ['class' => 'form-control', 'id'=>'user_id']) !!}
                        {!! Form::hidden('id', null, ['class' => 'form-control', 'id'=>'seguimiento_id']) !!}
                        {!! Form::hidden('proyecto_id', $proyecto->id, ['class' => 'form-control', 'id'=>'proyecto_id']) !!}
                        {!! Form::hidden('empresa_id', session('id_empresa'), ['class' => 'form-control', 'id'=>'empresa_id']) !!}

                        {!! Form::label('no1', '1. Fecha de cancelación', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no1', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group" id="div3">
                        {!! Form::label('no3', '3. Especifique', ['class' => 'form-label']) !!}
                        {!! Form::textarea('no3', null, ['class' => 'form-control', 'placeholder' => 'Especifique']) !!}
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div2">
                        {!! Form::label('no2', '2. Causa de cancelación', ['class' => 'form-label']) !!}
                        {!! Form::select('no2', ['Dificultades con la patología (Pacientes insuficientes)' => 'Dificultades con la patología (Pacientes insuficientes)', 'Dificultades con los criterios' => 'Dificultades con los criterios', 'Problemas de equipamiento' => 'Problemas de equipamiento', 'Éticamente inaceptable para el médico' => 'Éticamente inaceptable para el médico', 'Médicamente inaceptable' => 'Médicamente inaceptable', 'Éticamente inaceptable para la empresa' => 'Éticamente inaceptable para la empresa', 'Técnicamente inaceptable' => 'Técnicamente inaceptable', 'Rechazado por el patrocinador' => 'Rechazado por el patrocinador', 'Cancelado por Patrocinador' => 'Cancelado por Patrocinador', 'Cancelado por CE' => 'Cancelado por CE', 'Cancelado por autoridades de salud' => 'Cancelado por autoridades de salud', 'Cancelado por UIS' => 'Cancelado por UIS', 'No hubo acuerdo económico' => 'No hubo acuerdo económico', 'Otra causa' => 'Otra causa'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione...']) !!}
                    </div>
                    </div>

                    </div>
                  </div>



                  <!--SEGUIMIENTO-->
                  <div class="tab-pane fade" id="vert-tabs-2" role="tabpanel" aria-labelledby="vert-tabs-2-tab">
                    <div class="table-responsive">
                        <div align="left">
                            <button type="button" class="btn btn-info" onclick="CreateSeguimiento();">
                                <i class="fas fa-file"> Agregar seguimiento</i>
                            </button>  
                        </div><br/>
                        <table id="tbl_seguimiento" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%;">
                            <thead class="bg-mexg2 text-white">
                            <tr>
                                <th scope="col">Fecha de seguimiento</th>
                                <th scope="col">Resultado</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                  </div>



                  <!--SELECCION-->
                  <div class="tab-pane fade" id="vert-tabs-3" role="tabpanel" aria-labelledby="vert-tabs-3-tab">

                    <div class="row">

                    <div class="col-md-6">
                    <div class="form-group" id="div6">
                        {!! Form::label('no6', '6. Fecha de visita de selección', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no6', null, ['class' => 'form-control']) !!}
                        </div> 
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div7">
                        {!! Form::label('no7', '7. Meta de reclutamiento', ['class' => 'form-label']) !!}
                        {!! Form::text('no7', null, ['class' => 'form-control', 'placeholder' => 'Ingrese meta']) !!}
                    </div>
                    </div>

                    </div>
                  </div>



                  <!--FUENTES Y ESTRAGTEGIAS DE RECLUTAMIENTO-->
                  <div class="tab-pane fade" id="vert-tabs-4" role="tabpanel" aria-labelledby="vert-tabs-4-tab">

                    <div class="row">

                    <div class="col-md-6">
                    <div class="form-group" id="div8">
                        {!! Form::label('no8', '8. Consulta del Investigador principal', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no8', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no8', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div> 
                    </div>

                    <div class="form-group" id="div10">
                        {!! Form::label('no10', '10. Tarjeta de bolsillo', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no10', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no10', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div> 
                    </div>

                    <div class="form-group" id="div12">
                        {!! Form::label('no12', '12. Póster', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no12', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no12', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div> 
                    </div>

                    <div class="form-group" id="div14">
                        {!! Form::label('no14', '14. Prensa', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no14', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no14', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div> 
                    </div>

                    <div class="form-group" id="div16">
                        {!! Form::label('no16', '16. Debe elaborar el FC Publicidad', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no16', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no16', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div> 
                    </div>

                    <div class="form-group" id="div18">
                        {!! Form::label('no18', '18. Existen observaciones especiales en este estudio', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no18', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no18', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div> 
                    </div>

                    <div class="form-group" id="div20">
                        {!! Form::label('no20', '20. Fecha probable de sometimiento', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no20', null, ['class' => 'form-control']) !!}
                        </div> 
                    </div>

                    <div class="form-group" id="div21">
                        {!! Form::label('no21', '21. Fecha estimada de cierre de reclutamiento', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no21', null, ['class' => 'form-control']) !!}
                        </div> 
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div9">
                        {!! Form::label('no9', '9. Otros médicos o profesionales', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no9', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no9', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div11">
                        {!! Form::label('no11', '11. Grupos sociales', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no11', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no11', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div13">
                        {!! Form::label('no13', '13. Población abierta', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no13', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no13', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div15">
                        {!! Form::label('no15', '15. Web', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no15', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no15', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div17">
                        {!! Form::label('no17', '17. Entregó al patrocinador el FC Publicidad, adaptado para el estudio, para su aprobación ', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no17', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no17', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div19">
                        {!! Form::label('no19', '19. Observaciones especiales', ['class' => 'form-label']) !!}
                        {!! Form::textarea('no19', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la observación. Enumerarlas']) !!}
                    </div>
                    </div>

                    </div>
                  </div>



                  <!--EVALUACION DE CALIDAD-->
                  <div class="tab-pane fade" id="vert-tabs-5" role="tabpanel" aria-labelledby="vert-tabs-5-tab">

                    <div class="row">

                    <div class="col-md-6">
                    <div class="form-group" id="div22">
                        {!! Form::label('no22', '22. Días hábiles entre Fecha en que se recibió el cuestionario de factibilidad y Fecha de respuesta del cuestionario de factibilidad', ['class' => 'form-label']) !!}
                        {!! Form::text('no22', null, ['class' => 'form-control', 'placeholder' => 'Ingrese días', 'readonly']) !!}
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div23">
                        {!! Form::label('no23', '23. Se cumplió el Objetivo de la calidad número 1, Tiempo de factibilidad ≤ 3 días hábiles', ['class' => 'form-label']) !!}
                        {!! Form::text('no23', null, ['class' => 'form-control', 'placeholder' => 'Ingrese días', 'readonly']) !!}
                    </div>
                    </div>

                    </div>
                  </div>



                  
                </div>
              </div>

            </div>
        </div>
    </div>



                    
                  