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


<!-- Modal Formato-->
<div class="modal fade" id="createFormatoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        
        <!-- content PRESENTACION -->
        <div class="modal-content" id="content_presentacion">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Nuevo Formato</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Datos ID -->
            {!! Form::hidden('documentoformato_id', null, ['id' => 'documentoformato_id']) !!}
            {{-- {!! Form::hidden('empresaid_presentacion', $globalempresa_id, ['id' => 'empresaid_presentacion']) !!} --}}
            {!! Form::hidden('empresa_id', null, ['id' => 'empresa_id']) !!}
            {!! Form::hidden('menu_id', null, ['id' => 'menu_id']) !!}
            {!! Form::hidden('proyecto_id', null, ['id' => 'proyecto_id']) !!}
            {!! Form::hidden('user_id', null, ['id' => 'user_id']) !!}
            {!! Form::hidden('formato_id', null, ['id' => 'formato_id']) !!}

            <div class="container-fluid" id="div0">
                {!! Form::label('no0', 'Proyecto (Código UIS)', ['class' => 'form-label']) !!}
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-folder"></i></span>
                    {!! Form::select('no0', ['' => ''],null, ['class' => 'form-control', 'id' => 'no0', 'placeholder' => 'Seleccione un proyecto...', 'required']) !!}
                </div>
            </div>

            {{-- Presentacion --}}
            <div id="body-presentacion">
            <div class="modal-body">
                {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_presentacion']) !!}

                <div class="form-group" id="div1">
                    {!! Form::label('1no1', '1. Lugar', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                        {!! Form::select('1no1', ['Chihuahua, Chih.' => 'Chihuahua, Chih.', 'Ciudad de México' => 'Ciudad de México', 'Zapopan, Jal.' => 'Zapopan, Jal.'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione el lugar...', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div2">
                    {!! Form::label('1no2', '2. Fecha de presentacion', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        {!! Form::date('1no2', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div3">
                    {!! Form::label('1no3', '3. Nombre completo', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                        {!! Form::text('1no3', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div4">
                    {!! Form::label('1no4', '4. Especialidad', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                        {!! Form::text('1no4', null, ['class' => 'form-control', 'placeholder' => 'Especialidad', 'required']) !!}
                    </div>
                </div>

                <!--TODO: hacer que se seleccione automaticamente el ESTIMADO o ESTIMADA-->

                <div class="form-group" id="div5">
                    {!! Form::label('1no5', '5. Patología', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-briefcase-medical"></i></span>
                        {!! Form::text('1no5', null, ['class' => 'form-control', 'placeholder' => 'Patología', 'readonly']) !!}
                    </div>
                </div>

                <div class="form-group" id="div6">
                    {!! Form::label('1no6', '6. Tipo de colaboración', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        {!! Form::select('1no6', ['Investigador Principal' => 'Investigador Principal', 'Sub Investigador' => 'Sub Investigador', 'Coordinador de estudios' => 'Coordinador de estudios'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione tipo de colabora...', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div7">
                    {!! Form::label('1no7', '7. A cargo de ', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        {{-- {!! Form::text('a_cargo', null, ['class' => 'form-control'rgo', 'placeholder' => 'Seleccione tipo de colabora...', 'disabled']) !!} --}}
                        {!! Form::select('1no7', ['Lic. Luz Eighty García, Coordinadora de Investigación Clínica' => 'Lic. Luz Eighty García, Coordinadora de Investigación Clínica', 'Química Ruth Zafra, Coordinadora de Investigación Clínica' => 'Química Ruth Zafra, Coordinadora de Investigación Clínica', 'Dra. Brenda Rábago, Coordinadora de Investigación Clínica' => 'Dra. Brenda Rábago, Coordinadora de Investigación Clínica'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione la persona a cargo...', 'required']) !!}
                    </div>
                </div>
        
                {{-- <div class="form-group" id="div44">
                    {!! Form::label('no44', '44. Resultado de presentacion', ['class' => 'form-label']) !!}
                    {!! Form::textarea('no44', null, ['class' => 'form-control'', 'placeholder' => 'Ingrese el resultado']) !!}
                </div> --}}
        
            </div>
            <div class="modal-footer">
                <button type="button" id="btnCpresentacion" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGpresentacion" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
            </div>
            {!! Form::close() !!}
            </div>
            {{-- END Presentacion --}}

            {{-- Constancia anual --}}
            <div id="body-constanciaAnual">
            <div class="modal-body">
                {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_constanciaAnual']) !!}

                <div class="form-group" id="div1">
                    {!! Form::label('2no1', '1. Título. Nombre completo', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                        {!! Form::text('2no1', null, ['class' => 'form-control', 'placeholder' => 'Título. Nombre completo', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div2">
                    {!! Form::label('2no2', '2. Rol en la investigación', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                        {!! Form::text('2no2', null, ['class' => 'form-control','placeholder' => 'Rol en la investigación', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div3">
                    {!! Form::label('2no3', '3. Especialidad', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                        {!! Form::text('2no3', null, ['class' => 'form-control', 'placeholder' => 'Especialidad', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div4">
                    {!! Form::label('2no4', '4. Fecha de Inicio', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        {!! Form::date('2no4', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div5">
                    {!! Form::label('2no5', '5. Fecha de Fin', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        {!! Form::date('2no5', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div6">
                    {!! Form::label('2no6', '6. Código', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-folder-open"></i></span>
                        {!! Form::text('2no6', null, ['class' => 'form-control', 'placeholder' => 'Código', 'readonly']) !!}
                    </div>
                </div>

                <!--TODO: La constancia se genera sola o no?-->
                <div class="form-group" id="div7">
                    {!! Form::label('2no7', '7. Constancia No.', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-folder-open"></i></span>
                        {!! Form::text('2no7', null, ['class' => 'form-control', 'placeholder' => 'Constancia No.', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div8">
                    {!! Form::label('2no8', '8. Fecha', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        {!! Form::date('2no8', null, ['class' => 'form-control', 'required']) !!}
                    </div>
                </div>
        
            </div>
            <div class="modal-footer">
                <button type="button" id="btnCconstanciaAnual" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGconstanciaAnual" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
            </div>
            {!! Form::close() !!}
            </div>
            {{-- END constancia anual --}}

            {{-- Publicidad --}}
            <div id="body-publicidad">
                <div class="modal-body">
                    {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_publicidad']) !!}
    
                    <div class="form-group" id="div1">
                        {!! Form::label('3no1', '1. Nombre de la patología', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-briefcase-medical"></i></span>
                            {!! Form::text('3no1', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la patología', 'required', 'readonly']) !!}
                        </div>
                    </div>

                    <!-- TODO: llenar con los datos de la empresa: numero de la empresa -->
                    <div class="form-group" id="div2">
                        {!! Form::label('3no2', '2. Teléfonos', ['class' => 'form-label']) !!}
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            {!! Form::text('3no2', null, ['class' => 'form-control', 'placeholder' => 'Teléfonos', 'required', 'readonly']) !!}
                        </div>
                    </div>
    
                    <div class="form-group" id="div3">
                        {!! Form::label('3no3', '3. Requisitos', ['class' => 'form-label']) !!}
                        <div id="wrapper_publicidad">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-list"></i></span>
                            {!! Form::text('3no3', null, ['class' => 'form-control','placeholder' => 'Requisitos', 'required']) !!}
                            <button type="button" id="add_requisito" class="btn btn-primary" title="Agregar campo"><i class="fas fa-plus-square"></i></button>
                        </div>
                        </div>
                    </div>
            
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnCpublicidad" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" id="btnGpublicidad" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
                </div>
                {!! Form::close() !!}
                </div>
                {{-- END Publicidad --}}

                {{-- Codigo y titulo --}}
                <div id="body-codigoTitulo">
                    <div class="modal-body">
                        {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_codigoTitulo']) !!}
        
                        <div class="form-group" id="div1">
                            {!! Form::label('4no1', '1. Ciudad', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                                {!! Form::select('4no1', [ 'Chihuahua, Chih.' => 'Chihuahua, Chih.', 'Ciudad de México' => 'Ciudad de México' ],null, ['class' => 'form-control', 'placeholder' => 'Seleccione una ciudad', 'required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div2">
                            {!! Form::label('4no2', '2. Fecha', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                {!! Form::date('4no2', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div3">
                            {!! Form::label('4no3', '3. Código', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-folder-open"></i></span>
                                {!! Form::text('4no3', null, ['class' => 'form-control', 'placeholder' => 'Código', 'readonly','required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div4">
                            {!! Form::label('4no4', '4. Título', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-pen-square"></i></span>
                                {!! Form::text('4no4', null, ['class' => 'form-control', 'placeholder' => 'Título', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div5">
                            {!! Form::label('4no5', '5. Patrocinador', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::text('4no5', null, ['class' => 'form-control', 'placeholder' => 'Patrocinador', 'readonly']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div6">
                            {!! Form::label('4no6', '6. Dirección sitio clínico', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                {!! Form::text('4no6', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'readonly','required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div7">
                            {!! Form::label('4no7', '7. Nombre del Investigador principal', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::text('4no7', null, ['class' => 'form-control', 'placeholder' => 'Investigador principal', 'readonly', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div8">
                            {!! Form::label('4no8', '8. Nombre del Hospital', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-hospital"></i></span>
                                {!! Form::text('4no8', null, ['class' => 'form-control', 'placeholder' => 'Hospital urgencias', 'required']) !!}
                            </div>
                        </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnCcodigotitulo" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGcodigotitulo" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
                    </div>
                    {!! Form::close() !!}
                </div>
                {{-- END Codigo y titulo --}}

                {{-- Sometimiento --}}
                <div id="body-sometimiento">
                    <div class="modal-body">
                        {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_sometimiento']) !!}
        
                        <div class="form-group" id="div1">
                            {!! Form::label('7no1', '1. Ciudad', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                                {!! Form::text('7no1', null, ['class' => 'form-control', 'placeholder' => 'Ciudad', 'readonly','required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div2">
                            {!! Form::label('7no2', '2. Fecha', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                {!! Form::date('7no2', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div3">
                            {!! Form::label('7no3', '3. Código', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-folder-open"></i></span>
                                {!! Form::text('7no3', null, ['class' => 'form-control', 'placeholder' => 'Código', 'readonly','required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div4">
                            {!! Form::label('7no4', '4. Título', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-pen-square"></i></span>
                                {!! Form::text('7no4', null, ['class' => 'form-control', 'placeholder' => 'Título', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div5">
                            {!! Form::label('7no5', '5. Patrocinador', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::text('7no5', null, ['class' => 'form-control', 'placeholder' => 'Patrocinador', 'readonly']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div6">
                            {!! Form::label('7no6', '6. Nombre del Investigador principal', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::text('7no6', null, ['class' => 'form-control', 'placeholder' => 'Investigador principal', 'readonly', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div7">
                            {!! Form::label('7no7', '7. Documentos', ['class' => 'form-label']) !!}
                            <div id="wrapper_sometimiento">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                                {!! Form::text('7no7', null, ['class' => 'form-control', 'placeholder' => 'Nombre, version y Fecha del documento', 'required']) !!}
                                <button type="button" id="add_documento" class="btn btn-primary" title="Agregar campo"><i class="fas fa-plus-square"></i></button>
                            </div>
                            </div>
                        </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnCsometimiento" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGsometimiento" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
                    </div>
                    {!! Form::close() !!}
                </div>
                {{-- END Sometimiento --}}

                {{-- Compromisos --}}
                <div id="body-compromisos">
                    <div class="modal-body">
                        {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_compromisos']) !!}
        
                        <div class="form-group" id="div1">
                            {!! Form::label('8no1', '1. Ciudad', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                                {!! Form::select('8no1', [ 'Chihuahua, Chih.' => 'Chihuahua, Chih.', 'Ciudad de México' => 'Ciudad de México', 'Zapopan, Jal.' => 'Zapopan, Jal.' ],null, ['class' => 'form-control', 'placeholder' => 'Seleccione una ciudad', 'required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div2">
                            {!! Form::label('8no2', '2. Fecha', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                {!! Form::date('8no2', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div3">
                            {!! Form::label('8no3', '3. Compromiso', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::select('8no3', [ 'Investigador Principal' => 'Investigador Principal', 'Sub Investigador' => 'Sub Investigador', 'Coordinador de Estudios' => 'Coordinador de Estudios' ],null, ['class' => 'form-control', 'placeholder' => 'Seleccione tipo de compromiso', 'required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div4">
                            {!! Form::label('8no4', '4. Código', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-folder-open"></i></span>
                                {!! Form::text('8no4', null, ['class' => 'form-control', 'placeholder' => 'Código', 'readonly','required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div5">
                            {!! Form::label('8no5', '5. Título', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-pen-square"></i></span>
                                {!! Form::text('8no5', null, ['class' => 'form-control', 'placeholder' => 'Título', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div6">
                            {!! Form::label('8no6', '6. Patrocinador', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::text('8no6', null, ['class' => 'form-control', 'placeholder' => 'Patrocinador', 'readonly']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div7">
                            {!! Form::label('8no7', '7. Dirección sitio clínico', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                {!! Form::text('8no7', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'readonly','required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div8">
                            {!! Form::label('8no8', '8. Acepto participar como', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::text('8no8', null, ['class' => 'form-control', 'placeholder' => 'Participación', 'readonly', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div9">
                            {!! Form::label('8no9', '9. Título', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-graduate"></i></span>
                                {!! Form::text('8no9', null, ['class' => 'form-control', 'placeholder' => 'Título', 'readonly', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div10">
                            {!! Form::label('8no10', '10. Nombre del Investigador', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::text('8no10', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'readonly', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div11">
                            {!! Form::label('8no11', '11. Cédula', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                {!! Form::text('8no11', null, ['class' => 'form-control', 'placeholder' => 'Cédula', 'readonly', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div12">
                            {!! Form::label('8no12', '12. Rol en la investigación', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                                {!! Form::text('8no12', null, ['class' => 'form-control', 'placeholder' => 'Rol', 'readonly', 'required']) !!}
                            </div>
                        </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnCcompromisos" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGcompromisos" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
                    </div>
                    {!! Form::close() !!}
                </div>
                {{-- END Compromisos --}}

                {{-- Responsabilidades --}}
                <div id="body-responsabilidades">
                    <div class="modal-body">
                        {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_responsabilidades']) !!}
        
                        <div class="form-group" id="div1">
                            {!! Form::label('9no1', '1. Ciudad', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-city"></i></span>
                                {!! Form::select('9no1', [ 'Chihuahua, Chih.' => 'Chihuahua, Chih.', 'Ciudad de México' => 'Ciudad de México', 'Zapopan, Jal.' => 'Zapopan, Jal.' ],null, ['class' => 'form-control', 'placeholder' => 'Seleccione una ciudad', 'required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div2">
                            {!! Form::label('9no2', '2. Fecha', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                {!! Form::date('9no2', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div3">
                            {!! Form::label('9no3', '3. Código', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-folder-open"></i></span>
                                {!! Form::text('9no3', null, ['class' => 'form-control', 'placeholder' => 'Código', 'readonly','required']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div4">
                            {!! Form::label('9no4', '4. Título', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-pen-square"></i></span>
                                {!! Form::text('9no4', null, ['class' => 'form-control', 'placeholder' => 'Título', 'readonly']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div5">
                            {!! Form::label('9no5', '5. Patrocinador', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::text('9no5', null, ['class' => 'form-control', 'placeholder' => 'Patrocinador', 'readonly']) !!}
                            </div>
                        </div>
        
                        <div class="form-group" id="div6">
                            {!! Form::label('9no6', '6. Dirección sitio clínico', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                {!! Form::text('9no6', null, ['class' => 'form-control', 'placeholder' => 'Dirección', 'readonly','required']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div7">
                            {!! Form::label('9no7', '7. Nombre del Investigador', ['class' => 'form-label']) !!}
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                {!! Form::text('9no7', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'readonly', 'required']) !!}
                            </div>
                        </div>

                        <div class="form-group" id="div8">
                            {!! Form::label('9no8', '8. Personal', ['class' => 'form-label']) !!}
                            <div id="wrapper_sometimiento">
                            <div class="p-2 rounded border border-primary">

                                <div class="form-group">
                                    {!! Form::label('9no8', 'Nombre', ['class' => 'form-label']) !!}
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                                    {!! Form::text('9no9', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('9no8', 'Rol en el estudio', ['class' => 'form-label']) !!}
                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                                    {!! Form::text('9no10', null, ['class' => 'form-control', 'placeholder' => 'Rol en el estudio', 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('9no8', 'Responsabilidades', ['class' => 'form-label']) !!}

                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '1 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '2 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '3 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '4 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '5 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '6 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '7 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '8 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '9 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '10 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '11 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '12 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '13 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '14 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '15 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '16 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '17 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '18 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '19 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '20 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '21 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '22 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '23 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '24 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '25 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '26 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '27 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no12', 2, false,['class' => 'form-check-input']) !!}
                                            <div></div>
                                            {!! Form::label('9no12', '28 Selección de pacientes', ['class' => 'form-check-label', 'for' => '9no12']) !!}
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <div class="form-check form-check-inline">
                                            {!! Form::checkbox('9no11', 1, false,['class' => 'form-check-input']) !!}
                                            {!! Form::label('9no11', '29 Conducir el estudio', ['class' => 'form-check-label', 'for' => '9no11']) !!}
                                        </div>
                                    </div>

                                </div>

                                <button type="button" id="add_documento" class="btn btn-primary" title="Agregar campo"><i class="fas fa-plus-square"></i></button>
                            </div>
                            </div>
                        </div>
                
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnCcompromisos" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" id="btnGcompromisos" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
                    </div>
                    {!! Form::close() !!}
                </div>
                {{-- END Responsabilidades --}}

        </div>
        <!-- END PRESENTACION -->


        <!-- content CONSTANCIA ANUAL -->
        {{-- <div class="modal-content" id="content_constancia_anual" style="display: none;">
            <div class="modal-header">
                <h5 class="modal-title" id="createConstanciaAnualModalLabel">Nuevo Formato Constancia Anual</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Cancelar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> --}}
            
            {{-- <div class="modal-body" id="body-constanciaanual">
                {!! Form::open(['autocomplete' => 'off', 'method'=>'POST', 'id'=>'formcreate_constanciaAnual']) !!}
                <!-- Datos ID -->
                {!! Form::hidden('documentoformato_id', null, ['id' => 'documentoformato_id']) !!} --}}
                {{-- {!! Form::hidden('empresaid_constanciaAnual', $globalempresa_id, ['id' => 'empresaid_constanciaAnual']) !!} --}}
                {{-- {!! Form::hidden('empresa_id', null, ['id' => 'empresa_id']) !!}
                {!! Form::hidden('menu_id', null, ['id' => 'menu_id']) !!}
                {!! Form::hidden('proyecto_id', null, ['id' => 'proyecto_id']) !!}
                {!! Form::hidden('user_id', null, ['id' => 'user_id']) !!}
                {!! Form::hidden('formato_id', null, ['id' => 'formato_id']) !!}
                
                <div class="form-group" id="div0">
                    {!! Form::label('no0', 'Proyecto (Código UIS)', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-folder"></i></span>
                        {!! Form::select('no0', ['' => ''],null, ['class' => 'form-control', 'id' => 'no0', 'placeholder' => 'Seleccione un proyecto...', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div1">
                    {!! Form::label('no1', '1. Título. Nombre completo', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                        {!! Form::text('no1', null, ['class' => 'form-control', 'id' => 'no1', 'placeholder' => 'Título. Nombre completo', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div2">
                    {!! Form::label('no2', '2. Rol en la investigación', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        {!! Form::text('no2', null, ['class' => 'form-control', 'id' => 'no2','placeholder' => 'Rol en la investigación', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div3">
                    {!! Form::label('no3', '3. Especialidad', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                        {!! Form::text('no3', null, ['class' => 'form-control', 'id' => 'no3', 'placeholder' => 'Especialidad', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div4">
                    {!! Form::label('no4', '4. Fecha de Inicio', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                        {!! Form::date('no4', null, ['class' => 'form-control', 'id' => 'no4', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div5">
                    {!! Form::label('no5', '5. Fecha de Fin', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                        {!! Form::date('no5', null, ['class' => 'form-control', 'id' => 'no5', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div6">
                    {!! Form::label('no6', '6. Código', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-briefcase-medical"></i></span>
                        {!! Form::text('no6', null, ['class' => 'form-control', 'id' => 'no6', 'placeholder' => 'Código', 'readonly']) !!}
                    </div>
                </div>

                <!--TODO: La constancia se genera sola o no?-->
                <div class="form-group" id="div7">
                    {!! Form::label('no7', '7. Constancia No.', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        {!! Form::text('no7', null, ['class' => 'form-control', 'id' => 'no7', 'placeholder' => 'Constancia No.', 'required']) !!}
                    </div>
                </div>

                <div class="form-group" id="div8">
                    {!! Form::label('no8', '8. Fecha', ['class' => 'form-label']) !!}
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        {!! Form::date('no8', null, ['class' => 'form-control', 'id' => 'no8', 'required']) !!}
                    </div>
                </div>
        
            </div>
            <div class="modal-footer">
                <button type="button" id="btnCconstanciaAnual" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGconstanciaAnual" class="btn btn-success"><i class="fas fa-save"> Guardar</i></button>
            </div>
            {!! Form::close() !!}
        </div> --}}
        <!-- END CONSTANCIA ANUAL -->


    </div>
    </div>