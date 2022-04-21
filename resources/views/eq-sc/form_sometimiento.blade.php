    <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Sometimiento
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
                                <a class="nav-link active" id="vert-tabs-1-tab" data-toggle="pill" href="#vert-tabs-1" role="tab" aria-controls="vert-tabs-1" aria-selected="false"><i class="far fa-edit"></i> Sometimiento</a>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
              
              <div class="col-7 col-sm-9 border-left">
                <div class="tab-content" id="vert-tabs-tabContent">

                  <!--SOMETIMIENTO-->
                  <div class="tab-pane fade show active" id="vert-tabs-1" role="tabpanel" aria-labelledby="vert-tabs-1-tab">
                    <?php
                        $user_id=auth()->id(); 
                    ?>
                    <!--APROBACION--> 
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Aprobación</h5><br/>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::hidden('user_id', $user_id, ['class' => 'form-control', 'id'=>'user_id']) !!}
                        {!! Form::hidden('id', null, ['class' => 'form-control', 'id'=>'factibilidad_id']) !!}
                        {!! Form::hidden('proyecto_id', $proyecto->id, ['class' => 'form-control', 'id'=>'proyecto_id']) !!}
                        {!! Form::hidden('empresa_id', session('id_empresa'), ['class' => 'form-control', 'id'=>'empresa_id']) !!}

                        {!! Form::label('no1', '1. Fecha de aprobación por el patrocinador', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no1', null, ['class' => 'form-control']) !!}
                        </div>

                        @error('no1')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('no2', '2. Número de sitio', ['class' => 'form-label']) !!}
                        {!! Form::text('no2', null, ['class' => 'form-control', 'placeholder' => 'Ingrese número']) !!}
                    </div>
                    </div>

                    </div><!--FIN APROBACION-->


                    <!--EQUIPO--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Equipo</h5><br/>
                    </div>
                    
                    <div class="table-responsive">
                        <div align="left">
                            <button type="button" class="btn btn-info" onclick="CreateEquipo();">
                                <i class="fas fa-file"> Agregar miembro del equipo</i>
                            </button>  
                        </div>
                        <table id="tbl_equipo" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%;">
                            <thead class="bg-mexg2 text-white">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Rol</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                    </div><!--FIN EQUIPO-->


                    <!--SOM--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Sometimiento</h5><br/>
                    </div>
                    
                    <div class="table-responsive">
                        <div align="left">
                            <button type="button" class="btn btn-info" onclick="CreateSom();">
                                <i class="fas fa-file"> Agregar sometimiento</i>
                            </button>  
                        </div>
                        <table id="tbl_sometimiento" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%;">
                            <thead class="bg-mexg2 text-white">
                            <tr>
                                <th scope="col">Fecha en que se recibe protocolo</th>
                                <th scope="col">Fecha en que sometio al CE</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                    </div><!--FIN SOM-->



                    <!--RESPUESTA--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Respuesta del CE</h5><br/>
                    </div>

                    <div class="table-responsive">
                        <div align="left">
                            <button type="button" class="btn btn-info" onclick="CreateRespuesta();">
                                <i class="fas fa-file"> Agregar respuesta del CE</i>
                            </button>  
                        </div>
                        <table id="tbl_respuesta" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%;">
                            <thead class="bg-mexg2 text-white">
                            <tr>
                                <th scope="col">Fecha de respuesta del CE</th>
                                <th scope="col">Respuesta del CE</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    
                    <div class="col-md-6"><br/>
                    <div class="form-group">
                        {!! Form::label('no25', '25. Fecha de autorización por el CEI', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no25', null, ['class' => 'form-control']) !!}
                        </div> 
                    </div>

                    <div class="form-group">
                        {!! Form::label('no26', '26. Nombre del CEI', ['class' => 'form-label']) !!}
                        {!! Form::text('no26', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('no27', '27. Nombre del Presidente del CEI', ['class' => 'form-label']) !!}
                        {!! Form::text('no27', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
                    </div>
                    </div>

                    <div class="col-md-6"><br/>
                    <div class="form-group">
                        {!! Form::label('no28', '28. Fecha de autorización por CI', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no28', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('no29', '29. Nombre del CI', ['class' => 'form-label']) !!}
                        {!! Form::text('no29', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('no30', '30. Nombre del Presidente del CI', ['class' => 'form-label']) !!}
                        {!! Form::text('no30', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre']) !!}
                    </div>
                    </div>

                    </div><!--FIN RESPUESTA-->



                    <!--DOSSIER--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Dossier regulatorio</h5><br/>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group" id="div31">
                        {!! Form::label('no31', '31. Respuesta positiva del CE', ['class' => 'form-label']) !!}
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

                    <div class="form-group" id="div32">
                        {!! Form::label('no32', '32. FC CV Español de cada miembro del equipo, firmado', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no32', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no32', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div33">
                        {!! Form::label('no33', '33. FC CV Inglés de cada miembro del equipo, firmado ', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no33', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no33', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div34">
                        {!! Form::label('no34', '34. Página de firmas, Protocolo versión español, firmada por PI', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no34', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no34', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div35">
                        {!! Form::label('no35', '35. Página de firmas, Protocolo versión inglés, firmada por PI', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no35', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no35', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div36">
                        {!! Form::label('no36', '36. Página de firmas, Manual del investigador, firmada por el PI', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no36', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no36', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div37">
                        {!! Form::label('no37', '37. FC Compromisos, firmado por PI, SI y SC', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no37', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no37', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div38">
                        {!! Form::label('no38', '38. FC Responsabilidades, firmado por PI', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no38', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no38', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div39">
                        {!! Form::label('no39', '39. FC Autorización, firmado por Dirección General', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no39', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no39', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div40">
                        {!! Form::label('no40', '40. FC Instalaciones, firmado por Dirección General', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no40', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no40', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group" id="div41">
                        {!! Form::label('no41', '41. FC Anticorrupción, firmado por Dirección General', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no41', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no41', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div42">
                        {!! Form::label('no42', '42. Copia de Licencia Sanitaria del Sitio Clínico', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no42', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no42', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div43">
                        {!! Form::label('no43', '43. Convenio para atención de urgencias', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no43', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no43', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div44">
                        {!! Form::label('no44', '44. Carta de descripción de instalaciones del lugar donde atenderán las urgencias', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no44', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no44', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div45">
                        {!! Form::label('no45', '45. Copia de Licencia Sanitaria del lugar donde atenderán las urgencias', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no45', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no45', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div46">
                        {!! Form::label('no46', '46. Copia del Registro del CE ante COFEPRIS', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no46', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no46', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div47">
                        {!! Form::label('no47', '47. Copia del Registro del CE ante CONBIOETICA', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no47', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no47', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div48">
                        {!! Form::label('no48', '48. Declaración del apego a GCP, firmada por Presidentes del CE', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no48', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no48', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="div49">
                        {!! Form::label('no49', '49. Lista de miembros del CE, firmada por Presidentes del CE', ['class' => 'form-label']) !!}
                        <div>
                            <label>
                                {!! Form::radio('no49', 'Si', null, ['class' => 'mr-1']) !!}
                                Si
                            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                {!! Form::radio('no49', 'No', null, ['class' => 'mr-1']) !!}
                                No
                            </label>
                        </div>
                    </div>
                    </div>

                    </div><!--FIN DOSSIER-->



                    <!--ENVIO--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Envío de dossier</h5><br/>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group" id="div50">
                        {!! Form::label('no50', '50. Fecha de envío de dossier regulatorio', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no50', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    </div>

                    </div><!--FIN ENVIO-->



                    <!--COFEPRIS--> <br/>
                    <div class="row">
                    <div class="col-12">
                        <h5 style="text-align:center">Autorización COFEPRIS</h5><br/>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group" id="div51">
                        {!! Form::label('no51', '51. Fecha de aprobación COFEPRIS', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            {!! Form::date('no51', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    </div>

                    </div><!--FIN COFEPRIS-->

                  </div><!--FIN DE TAB SOMETIMIENTO-->


                </div>
              </div>

            </div>
        </div>
    </div>



                    
                  