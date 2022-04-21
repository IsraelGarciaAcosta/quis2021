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
                                <a class="nav-link active" id="vert-tabs-1-tab" data-toggle="pill" href="#vert-tabs-1" role="tab" aria-controls="vert-tabs-1" aria-selected="false"><i class="far fa-edit"></i> Factibilidad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vert-tabs-2-tab" data-toggle="pill" href="#vert-tabs-2" role="tab" aria-controls="vert-tabs-2" aria-selected="false"><i class="far fa-edit"></i> Archivo</a>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
              
              <div class="col-7 col-sm-9 border-left">
                <div class="tab-content" id="vert-tabs-tabContent">

                  <!--FACTIBILIDAD-->
                  <div class="tab-pane fade show active" id="vert-tabs-1" role="tabpanel" aria-labelledby="vert-tabs-1-tab">
                    <?php
                        $user_id=auth()->id(); 
                    ?>

                    <div class="row">

                    <div class="col-md-6">
                    <div class="form-group" id="div1">
                    {!! Form::hidden('user_id', $user_id, ['class' => 'form-control', 'id'=>'user_id']) !!}
                        {!! Form::hidden('id', null, ['class' => 'form-control', 'id'=>'factibilidad_id']) !!}
                        {!! Form::hidden('proyecto_id', $proyecto->id, ['class' => 'form-control', 'id'=>'proyecto_id']) !!}
                        {!! Form::hidden('empresa_id', session('id_empresa'), ['class' => 'form-control', 'id'=>'empresa_id']) !!}

                        {!! Form::label('no1', '1. Fecha en que se recibió el cuestionario de factibilidad', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no1', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group" id="div3">
                        {!! Form::label('no3', '3. Decisión de factibilidad', ['class' => 'form-label']) !!}
                        {!! Form::select('no3', ['Rechazo' => 'Rechazo', 'Aceptación' => 'Aceptación'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione...']) !!}
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div2">
                        {!! Form::label('no2', '2. Fecha de respuesta de cuestionario de factibilidad ', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no2', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    </div>

                    </div>
                  </div>



                  <!--ARCHIVO-->
                  <div class="tab-pane fade" id="vert-tabs-2" role="tabpanel" aria-labelledby="vert-tabs-2-tab">

                    <div class="row">

                    <div class="col-md-6">
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

                    <div class="col-md-6">
                    <div class="form-group" id="div5">
                        {!! Form::label('no5', '5. Archivó una copia del cuestionario respondido en formato electrónico', ['class' => 'form-label']) !!}
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
                    </div>

                    </div>
                  </div>

                  
                </div>
              </div>

            </div>
        </div>
    </div>



                    
                  