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
                                <a class="nav-link active" id="vert-tabs-1-tab" data-toggle="pill" href="#vert-tabs-1" role="tab" aria-controls="vert-tabs-1" aria-selected="false"><i class="far fa-edit"></i> Proyecto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vert-tabs-2-tab" data-toggle="pill" href="#vert-tabs-2" role="tab" aria-controls="vert-tabs-2" aria-selected="false"><i class="far fa-edit"></i> Cuestionario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vert-tabs-3-tab" data-toggle="pill" href="#vert-tabs-3" role="tab" aria-controls="vert-tabs-3" aria-selected="false"><i class="far fa-edit"></i> Seguimiento</a>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
              
              <div class="col-7 col-sm-9 border-left">
                <div class="tab-content" id="vert-tabs-tabContent">

                  <!--PROYECTO-->
                  <div class="tab-pane fade show active" id="vert-tabs-1" role="tabpanel" aria-labelledby="vert-tabs-1-tab">
                    <?php
                        $user_id=auth()->id(); 
                    ?>
                    <!--PROPUESTA--> 
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Propuesta</h5><br/>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::hidden('user_id', $user_id, ['class' => 'form-control', 'id'=>'user_id']) !!}
                        {!! Form::hidden('id', null, ['class' => 'form-control', 'id'=>'factibilidad_id']) !!}
                        {!! Form::hidden('proyecto_id', $proyecto->id, ['class' => 'form-control', 'id'=>'proyecto_id']) !!}
                        {!! Form::hidden('empresa_id', session('id_empresa'), ['class' => 'form-control', 'id'=>'empresa_id']) !!}

                        {!! Form::label('no1', '1. Fecha de propuesta', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no1', null, ['class' => 'form-control']) !!}
                        </div>

                        @error('no1')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group" id="div2">
                        {!! Form::label('no2', '2. Etapa', ['class' => 'form-label']) !!}
                        {!! Form::select('no2', ['Factibilidad' => 'Factibilidad', 'Incubación' => 'Incubación', 'Conducción' => 'Conducción', 'Terminado' => 'Terminado', 'Archivo muerto' => 'Archivo muerto', 'Destrucción' => 'Destrucción'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione...']) !!}
                    </div>
            
                    <div class="form-group" id="div3">
                        {!! Form::label('no3', '3. Fecha de inicio de la etapa', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no3', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div4">
                        {!! Form::label('no4', '4. Contacto de factibilidad', ['class' => 'form-label']) !!}
                        {!! Form::text('no4', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
                    </div>

                    <div class="form-group" id="div5">
                        {!! Form::label('no5', '5. Se llenó tarjeta de contacto de factibilidad', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no5', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no5', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    </div><!--FIN PROPUESTA-->


                    <!--ANALISIS--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Análisis</h5><br/>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group" id="div6">
                        {!! Form::label('no6', '6. ¿El estudio es éticamente aceptable para la empresa?', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no6', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no6', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div7">
                        {!! Form::label('no7', '7. ¿El estudio es técnicamente aceptable para la empresa?', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no7', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no7', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div8">
                        {!! Form::label('no8', '8. ¿El estudio es éticamente aceptable para el investigador?', ['class' => 'form-label']) !!}
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

                    <div class="form-group" id="div9">
                        {!! Form::label('no9', '9. ¿El estudio es médicamente aceptable para el investigador?', ['class' => 'form-label']) !!}
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
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div10">
                        {!! Form::label('no10', '10. ¿Existe evidencia de dificultades en un estudio previo con patología o criterios similares?', ['class' => 'form-label']) !!}
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

                    <div class="form-group" id="div11">
                        {!! Form::label('no11', '11. ¿Se comentó con la dirección?', ['class' => 'form-label']) !!}
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

                    <div class="form-group" id="div12">
                        {!! Form::label('no12', '12. ¿El estudio debe cancelarse?', ['class' => 'form-label']) !!}
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

                    <div class="form-group" id="div13">
                        {!! Form::label('no13', '13. Fecha de respuesta al cliente', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no13', null, ['class' => 'form-control']) !!}
                        </div> 
                    </div>
                    </div>

                    </div><!--FIN ANALISIS-->


                    <!--CONFIDENCIALIDAD--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Confidencialidad</h5><br/>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group" id="div14">
                        {!! Form::label('no14', '14. Firmó Confidencialidad con el patrocinador', ['class' => 'form-label']) !!}
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

                    <div class="form-group" id="div15">
                        {!! Form::label('no15', '15. Fecha de envío electrónico de Confidencialidad firmada por UIS', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no15', null, ['class' => 'form-control']) !!}
                        </div> 
                    </div>

                    <div class="form-group" id="div16">
                        {!! Form::label('no16', '16. Abrió carpeta de archivo electrónico', ['class' => 'form-label']) !!}
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
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div17">
                        {!! Form::label('no17', '17. Archivó el contacto electrónico inicial con el nombre Contacto inicial + fecha', ['class' => 'form-label']) !!}
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

                    <div class="form-group" id="div18">
                        {!! Form::label('no18', '18. Archivó la confidencialidad firmada en archivo electrónico, con el nombre CDA Dra. Velázquez + fecha', ['class' => 'form-label']) !!}
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

                    <div class="form-group" id="div19">
                        {!! Form::label('no19', '19. Archivó la confidencialidad firmada en la incubadora de proyectos', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no19', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no19', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    </div><!--FIN CONFIDENCIALIDAD-->



                    <!--EQUIPO--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Equipo del estudio</h5><br/>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group" id="div20">
                        {!! Form::label('no20', '20. Investigador principal (Nombre completo)', ['class' => 'form-label']) !!}
                        {{--{!! Form::select('no20', $investigadores, null, ['class' => 'form-control', 'placeholder' => 'Seleccione...']) !!}--}}
                    </div>

                    <div class="form-group" id="div21">
                        {!! Form::label('no21', '21. Se llenó tarjeta de contacto del investigador principal', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no21', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no21', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div22">
                        {!! Form::label('no22', '22. Envió al investigador principal el FC Presentación', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no22', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no22', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div23">
                        {!! Form::label('no23', '23. El investigador principal firmó acuerdo de confidencialidad para el estudio', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no23', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no23', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div24">
                        {!! Form::label('no24', '24. Envió la confidencialidad firmada por el investigador principal por vía electrónica', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no24', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no24', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    </div><!--FIN EQUIPO-->



                    <!--EQUIPAMIENTO--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Equipamiento</h5><br/>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group" id="div25">
                        {!! Form::label('no25', '25. Se verificó el equipamiento', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no25', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no25', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div26">
                        {!! Form::label('no26', '26. Existe algún problema de equipamiento', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no26', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no26', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    <br/>
                    <div class="table-responsive">
                        <div align="left">
                            <button type="button" class="btn btn-info" onclick="CreateProblema();">
                                <i class="fas fa-file"> Agregar problema</i>
                            </button>  
                        </div>
                        <table id="tbl_problema" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%;">
                            <thead class="bg-mexg2 text-white">
                            <tr>
                                <th scope="col">Problema de equipamiento</th>
                                <th scope="col">Solución</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="col-md-6"><br/>
                    <div class="form-group" id="div29">
                        {!! Form::label('no29', '29. Se pudieron resolver todos los problemas de equipamiento', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no29', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no29', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div30">
                        {!! Form::label('no30', '30. Verificó la bitácora de mantenimiento de equipos', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no30', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no30', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6"><br/>
                    <div class="form-group" id="div31">
                        {!! Form::label('no31', '31. Todo el equipo necesario está calibrado', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no31', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no31', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    </div><!--FIN EQUIPAMIENTO-->

                  </div><!--FIN DE TAB PROYECTO-->





                  <!--CUESTIONARIO-->
                  <div class="tab-pane fade" id="vert-tabs-2" role="tabpanel" aria-labelledby="vert-tabs-2-tab">

                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Factibilidad</h5><br/>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div1">
                        {!! Form::label('no1', '1. Fecha en que se recibió el cuestionario de factibilidad', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no1', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group" id="div2">
                        {!! Form::label('no2', '2. Fecha de respuesta de cuestionario de factibilidad ', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no2', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group" id="div3">
                        {!! Form::label('no3', '3. Decisión de factibilidad', ['class' => 'form-label']) !!}
                        {!! Form::select('no3', ['Rechazo' => 'Rechazo', 'Aceptación' => 'Aceptación'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione...']) !!}
                    </div>

                    <div class="form-group" id="div4">
                        {!! Form::label('no4', '4. Archivó el correo que contiene la sinopsis del estudio y el cuestionario de factibilidad, con el nombre Sinopsis y cuestionario + fecha', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no4', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no4', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div6">
                        {!! Form::label('no6', '6. Archivó una copia del correo de respuesta FIQ enviado + fecha', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no6', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no6', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div7">
                        {!! Form::label('no7', '7. Archivó una copia del correo de respuesta Estudio no aceptado + fecha', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no7', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no7', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div8">
                        {!! Form::label('no8', '8. Archivó una copia del correo de confirmación FIQ recibido + fecha', ['class' => 'form-label']) !!}
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
                    </div>

                    </div>

                  </div><!--FIN DE TAB CUESTIONARIO-->





                  <!--SEGUIMIENTO-->
                  <div class="tab-pane fade" id="vert-tabs-3" role="tabpanel" aria-labelledby="vert-tabs-3-tab">

                    <!--CANCELACION-->
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Cancelación</h5><br/>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div1">
                        {!! Form::label('no1', '1. Fecha de cancelación', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no1', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group" id="div2">
                        {!! Form::label('no2', '2. Causa de cancelación', ['class' => 'form-label']) !!}
                        {!! Form::select('no2', ['Dificultades con la patología (Pacientes insuficientes)' => 'Dificultades con la patología (Pacientes insuficientes)', 'Dificultades con los criterios' => 'Dificultades con los criterios', 'Problemas de equipamiento' => 'Problemas de equipamiento', 'Éticamente inaceptable para el médico' => 'Éticamente inaceptable para el médico', 'Médicamente inaceptable' => 'Médicamente inaceptable', 'Éticamente inaceptable para la empresa' => 'Éticamente inaceptable para la empresa', 'Técnicamente inaceptable' => 'Técnicamente inaceptable', 'Rechazado por el patrocinador' => 'Rechazado por el patrocinador', 'Cancelado por Patrocinador' => 'Cancelado por Patrocinador', 'Cancelado por CE' => 'Cancelado por CE', 'Cancelado por autoridades de salud' => 'Cancelado por autoridades de salud', 'Cancelado por UIS' => 'Cancelado por UIS', 'No hubo acuerdo económico' => 'No hubo acuerdo económico', 'Otra causa' => 'Otra causa'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione...']) !!}
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div3">
                        {!! Form::label('no3', '3. Si es otra causa o, especifique', ['class' => 'form-label']) !!}
                        {!! Form::textarea('no3', null, ['class' => 'form-control', 'placeholder' => 'Especifique']) !!}
                    </div>
                    </div>

                    </div><!--FIN CANCELACION-->



                    <!--SEGUIMIENTO--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Seguimiento</h5><br/>
                    </div>

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

                    </div><!--FIN SEGUIMIENTO-->



                    <!--SELECCION--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Selección</h5><br/>
                    </div>

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

                    </div><!--FIN SELECCION-->



                    <!--FUENTES--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Fuentes y estrategias de reclutamiento</h5><br/>
                    </div>

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
                    </div>

                    <div class="col-md-6">
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

                    <div class="form-group" id="div19">
                        {!! Form::label('no19', '19. Observaciones especiales', ['class' => 'form-label']) !!}
                        {!! Form::textarea('no19', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la observación. Enumerarlas']) !!}
                    </div>
                    </div>

                    </div><!--FIN FUENTES-->

                  </div><!--FIN DE TAB SEGUIMIENTO-->


                </div>
              </div>

            </div>
        </div>
    </div>



                    
                  