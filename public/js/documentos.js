$(document).ready(
    function() {
    $('#doc_formatos').select2();

    $('#documentos_capacitacion').DataTable({
        select: true,
        "lengthMenu": [[10, 50, -1], [10, 50, "Todos"]],
        "language": espanol,
    });
    $('#documentos_manuales').DataTable({
        "lengthMenu": [[10, 50, -1], [10, 50, "Todos"]],
        "language": espanol
    });
    $('#documentos_procesos').DataTable({
        "lengthMenu": [[10, 50, -1], [10, 50, "Todos"]],
        "language": espanol
    });
    $('#documentos_procedimientos').DataTable({
        "lengthMenu": [[10, 50, -1], [10, 50, "Todos"]],
        "language": espanol
    });
    $('#documentos_instructivos').DataTable({
        "lengthMenu": [[10, 50, -1], [10, 50, "Todos"]],
        "language": espanol
    });

    }
);

let espanol = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    },
    "buttons": {
        "copy": "Copiar",
        "colvis": "Visibilidad"
    }
};

function cambiarCapacitacion(dir) {
    $("#pdf_capacitacion").attr("src", dir);
}

function cambiarManuales(dir) {
    $("#pdf_manuales").attr("src", dir);
}

function cambiarProcesos(dir) {
    $("#pdf_procesos").attr("src", dir);
}

function cambiarProcedimientos(dir) {
    $("#pdf_procedimientos").attr("src", dir);
}

function cambiarInstructivos(dir) {
    $("#pdf_instructivos").attr("src", dir);
}


// Onchange del select de los formatos. para cargar los farmatos y obtener el valor para saber en que formato se encuentra
$("#doc_formatos").change(
    function(){
        list_formatos();
        select_content_modal(this.value);
    }
);

// $("#new_format").click(
//     function(){
//         alert($("#new_format").val());
//     }
// )

// MODAL mostrar el modal
function CreateFormato(){
    $('#createFormatoModal').modal('toggle');
}

// Cargar los proyectos en el select del modal -- funciona para todos los proyectos
function list_proyectos() {
    $.ajax({
        url: "/documentos/list_proyectos",
        method:'POST',
        dataType: 'json',
        data:{ _token:$('input[name="_token"]').val()},
        success:function(data){
            var proyect = JSON.parse(data);
            $("#no0").empty();

            $("#no0").append("<option disabled selected>Seleccione un proyecto...</option>")
            $.each(proyect, function() {
                $("#no0").append("<option value=" + this.id + ">" + this.no18 + "</option>")
            });
        }
    });
}
// END---------- cargar proyectos

// Cargar tabla de formatos, depende de que formato se seleccione
function list_formatos(documento_formato){

    formato_id = documento_formato;
    // Cargar los proyectos en el select no0 del form 
    list_proyectos();

    if (!formato_id) {
        
        // alert('!formato_id')

        formato_id = $("#doc_formatos").val();

        $("#new_format").attr("value", formato_id);
        $("#table-formato").show();

        var list = $('#formatos_table').DataTable({
            dom: 'T<"clear">lfrtip',
            "processing": true,
            "serverSide": true,
            destroy: true,
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
            "ajax":{
                "url": "/documentos/list_formatos",
                "method": "POST",
                "data": {
                    formato_id:formato_id,
                    _token:$('input[name="_token"]').val()
                },
                
            },
            "columns": [
                {"data": 'fecha'},
                {"data": 'codigo_uis'},
                {"data": 'fecha_aprob'},
                {"data": 'usuario'},
                {"data": 'download_delete'},
                {"data": 'edit'},
            ],
            "language": espanol
        });

    }else{
        // alert('formato_id')

        $("#new_format").attr("value", formato_id);
        $("#table-formato").show();

        var list = $('#formatos_table').DataTable({
            dom: 'T<"clear">lfrtip',
            "processing": true,
            "serverSide": true,
            destroy: true,
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
            "ajax":{
                "url": "/documentos/list_formatos",
                "method": "POST",
                "data": {
                    formato_id:formato_id,
                    _token:$('input[name="_token"]').val()
                },
                
            },
            "columns": [
                {"data": 'fecha'},
                {"data": 'codigo_uis'},
                {"data": 'fecha_aprob'},
                {"data": 'usuario'},
                {"data": 'download_delete'},
                {"data": 'edit'},
            ],
            "language": espanol
        });

    }

}

// Metodo Eliminar
function delete_formatos(formato_id) {

    documento_formato_id = $("#doc_formatos").val();
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/documentos/delete_formato",
            method:'POST',
            type: 'post',
            data:{formato_id:formato_id, _token:$('input[name="_token"]').val()},
            success:function(resp){
                // alert(resp);
                if(resp){
                    toastr.success('El formato fue eliminado correctamente', 'Eliminar formato', {timeOut:3000});
                    list_formatos(documento_formato_id);
                }else{
                    toastr.error('El formato no se elimino correctamente', 'Eliminar formato', {timeOut:3000});
                    list_formatos(documento_formato_id);
                }
            }
        });
    })
    
}
// END Metodo eliminar

// Metodo Descargar
function download_formatos(formato_id) {
    alert(formato_id);

}
// END Metodo Descargar


// Metodo Editar 
function edit_formatos(formato_id) {

    documento_formato_id = $("#doc_formatos").val();
    $.ajax({
        url: "/documentos/edit_formato",
        method:'POST',
        dataType: 'json',
        data:{formato_id:formato_id, _token:$('input[name="_token"]').val()},
        success:function(data){

            if (data) {
                
                var formato = JSON.parse(data);
                var datos_json = JSON.parse(formato.datos_json);

                if (documento_formato_id == 3) {
                    var req = datos_json.length - 3;
                    if (req != 0) {
                        for (let i = 0; i < req; i++) {
                            publicidad_req_count++;
                            var id_requisito = 'id="3no' + publicidad_req_count + '"';
                            var fieldHTML = '<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-list"></i></span><input class="publicidad form-control" type="text" placeholder="Requisito" ' + id_requisito + ' value=""/><button type="button" class="remove_button btn btn-danger" title="Eliminar campo"><i class="fas fa-minus-square"></i></button></div>'
                            $("#wrapper_publicidad").append(fieldHTML);
                        }
                    };
                };
                if (documento_formato_id == 7) {
                    var doc = datos_json.length - 7;
                    if (doc != 0) {
                        for (let i = 0; i < doc; i++) {
                            sometimiento_doc_count++;
                            var id_documento = 'id="7no' + sometimiento_doc_count + '"';
                            var fieldHTML = '<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span><input class="sometimiento form-control" type="text" placeholder="Nombre, version y Fecha del documento" ' + id_documento + ' value=""/><button type="button" class="remove_button btn btn-danger" title="Eliminar campo"><i class="fas fa-minus-square"></i></button></div>'
                            $("#wrapper_sometimiento").append(fieldHTML);
                        }
                    };
                };
                if (documento_formato_id == 9) {
                    var doc = (datos_json.length - 10)/3;
                    if (doc != 0) {
                        for (let i = 0; i < doc; i++) {
                            responsabilidades_res_count++;
                            var id_nombre = 'id="9no' + responsabilidades_res_count + '"';

                            responsabilidades_res_count++;
                            var id_rol_estudio = 'id="9no' + responsabilidades_res_count + '"';

                            responsabilidades_res_count++;
                            var id_responsabilidades = '9no' + responsabilidades_res_count + '';

                            begin = '<div class="p-2 rounded border border-5">';

                            input_nombre = '<div class="form-group"><label class="form-label" name="' + id_nombre + '">Nombre</label>' +
                            '<div class="input-group-prepend">' + '<span class="input-group-text"><i class="fas fa-file-alt"></i></span>' +
                            '<input class="responsabilidades form-control" type="text" placeholder="Nombre" ' + id_nombre + ' value="" required/>' +
                            '</div>' + '</div>'; 

                            input_rol_estudio = '<div class="form-group"><label class="form-label" name="' + id_rol_estudio + '">Rol en el estudio</label>' +
                            '<div class="input-group-prepend">' + '<span class="input-group-text"><i class="fas fa-user-circle"></i></span>' +
                            '<input class="responsabilidades form-control" type="text" placeholder="Rol en el estudio" ' + id_rol_estudio + ' value="" required/>' +
                            '</div>' + '</div>';

                            begin_responsabilidades = '<div class="container form-group">' + '<label class="form-label" name="9no">Responsabilidades</label>';

                            array_responsabilidades = ["1 Conducir el estudio", "2 Selección de pacientes", "3 Firma de ICF", "4 Confirmar elegibilidad", "5 Examen físico", "6 Signos vitales", "7 Aleatorización", "8 Comunicación IVRS", "9 Prescripción de producto", "10 Dispensar medicamento",
                                "11 Registro de medicamentos", "12 Control de medicamento", "13 Preparación y ministración de producto de investigación", "14 Terapias de rescate", "15 Finalizar tratamiento", "16 Evaluación de EA", "17 Información a los sujetos", "18 Entrega de materiales", "19 Obtener muestras biológicas", "20 Preparación de muestras",
                                "21 ECG", "22 Recolectar datos", "23 Captura de datos CRF", "24 Actividades administrativas", "25 Aplicación de escalas", "26 Técnico radiólogo", "27 Dermatólogo", "28 Técnico en espirometría", "29 Oftalmólogo",];

                            input_responsabilidades = '';

                            $.each(array_responsabilidades, function(i, val) {
                                var aux = i + 1;
                                if (i != 28) {
                                    if (i % 2 == 0) {
                                        // Par
                                        input_responsabilidades += '<div class="row">' + '<div class="col-sm form-check">' +
                                        '<label>' + '<input type="checkbox" value="' + aux + '" name="' + id_responsabilidades + '[]" class="responsabilidades form-check-input">' +
                                        val + '</label>' + '</div>';
                                    } else {
                                        // Impar
                                        input_responsabilidades += '<div class="col-sm form-check">' + '<label>' +
                                        '<input type="checkbox" value="' + aux + '" name="' + id_responsabilidades + '[]" class="responsabilidades form-check-input">' +
                                        val + '</label>' + '</div>' + '</div>';
                                    }
                                } else {
                                    input_responsabilidades += '<div class="row">' + '<div class="col-sm form-check">' + '<label>' +
                                    '<input type="checkbox" value="' + aux + '" name="' + id_responsabilidades + '[]" class="responsabilidades form-check-input">' +
                                    val + '</label>' + '</div>' + '</div>';
                                }
                            })
                            end_responsabilidades = '</div>';
                            end = '<div class="row">' + '<div class="col">' + '<button type="button" class="remove_button btn btn-block btn-danger" title="Eliminar campo"><i class="fas fa-minus-square"></i></button>' + '</div>' + '</div>' +'</div>';

                            var fieldHTML = begin + input_nombre + input_rol_estudio + begin_responsabilidades + input_responsabilidades + end_responsabilidades + end;
                            $("#wrapper_responsabilidades").append(fieldHTML);
                        }
                    };
                };
                
                $('#documentoformato_id').val(formato.documento_formato_id);
                $('#empresa_id').val(formato.empresa_id);
                $('#menu_id').val(formato.menu_id);
                $('#proyecto_id').val(formato.proyecto_id);
                $('#user_id').val(formato.user_id);
                $('#formato_id').val(formato.id);

                $('#no0 option[value="' + formato.proyecto_id + '"]').attr("selected", true);
                for (let i = 0; i < datos_json.length; i++) {
                    var aux = i + 1;
                    var id = '#' + formato.documento_formato_id + 'no' + aux;
                    $(id).val(datos_json[i]);
                };

                if (documento_formato_id == 9) {
                    aux = 9;
                    rep = (datos_json.length - 7)/3;
                    for (let i = 0; i < rep; i++) {
                        let checked_array = datos_json[aux];
                        nameId = aux + 1;
                        $.each(checked_array, function(i, val) {
                            val = val - 1;
                            $('input[name="9no' + nameId + '[]"')[val].checked = true;
                        })
                        aux+=3;
                    }
                }

                // list_proyectos();
                $('#createFormatoModal').modal('toggle');

            }else{
                $('#createFormatoModal').modal('hide');
                $('#btnGpresentacion').show();
                $("#formcreate_presentacion")[0].reset();
                borrar_campos();
                toastr.warning('No se encontro el formato seleccionado', 'Editar formato', {timeOut:3000});
            }
        }
    });

}
// END Metodo editar


// Cargar los campos del modal que esten en la tabla proyectos.
$('#no0').change(
    function(){

        proyecto_id = $('#no0').val();
        $.ajax({
            url: "/documentos/list_proyectos",
            method: 'POST',
            dataType: 'json',
            data: {
                proyecto_id:proyecto_id,
                _token:$('input[name="_token"]').val()
            },
            success: function(data){
                var proyect = JSON.parse(data);

                // TODO: Averiguar donde esta guardado el lugar en la base de datos
                // Es por la empresa, si es la de chihuahua chihuahua, en mexico méxico etc.
                // Saber en que ciudad esta cada empresa para poner la ciudad 
                // TODO: Averiguar el nombre que se va a generar y donde se guarda para saber el genero
                //Lo va a escribir el usuario
                // $("#name").val('Hola');
                //TODO: Averiguar cual campo es el nombre del colaborador 
                // $("#")
                $("#1no5").val(proyect[0]['no24']);


                $("#2no6").val(proyect[0]['no20']);


                $("#3no1").val(proyect[0]['no24']);
                // TODO: ver para poner el telefono de la empresa que corresponda $("#3no3").val();

                $("#4no3").val(proyect[0]['no20']);//Codigo
                $("#4no4").val(proyect[0]['no19']);//titulo
                $("#4no5").val(proyect[0]['no25']);//patrocinador
                // TODO Hacer metodo para obtener la direccion dependiendo de la empresa
                $("#4no6").val(proyect[0]['razon_social']);//Direcciona sitio clinico
                $("#4no7").val(proyect[0]['investigador']);//investigador

                // TODO: ver una manera para que se coloque la ciudad en lugar de el nombre de la empresa
                $("#7no3").val(proyect[0]['no20']);
                $("#7no1").val(proyect[0]['razon_social']);
                $("#7no4").val(proyect[0]['no19']);
                $("#7no5").val(proyect[0]['no25']);
                $("#7no6").val(proyect[0]['investigador']);

                $('#8no4').val(proyect[0]['no20']);//Codigo
                $('#8no5').val(proyect[0]['no19']);//Titulo
                $('#8no6').val(proyect[0]['no25']);//Patrocinador
                $('#8no7').val(proyect[0]['razon_social']);//Direccion
                $('#8no9').val(proyect[0]['titulo']);//Titulo investigador
                $('#8no10').val(proyect[0]['investigador']);//investigador
                $('#8no11').val(proyect[0]['cedula']);//cedula

                $("#9no3").val(proyect[0]['no20']);//codigo
                $("#9no4").val(proyect[0]['no19']);//titulo
                $("#9no5").val(proyect[0]['no25']);//patrocinador
                $("#9no6").val(proyect[0]['razon_social']);//Direccion
                $("#9no7").val(proyect[0]['investigador']);//Investigador

            }
        });

    }
)
// END cargar datos proyectos ---------------------


// Borrar campos -- reset form
function borrar_campos() {
    documento_formato_id = $("#doc_formatos").val();

    $("#documentoformato_id").val(null);
    $("#empresa_id").val(null);
    $("#menu_id").val(null);
    $("#proyecto_id").val(null);
    $("#user_id").val(null);
    $("#formato_id").val(null);
    $("#formcreate_presentacion")[0].reset();
    $("#formcreate_constanciaAnual")[0].reset();
    $("#formcreate_publicidad")[0].reset();
    $("#formcreate_codigoTitulo")[0].reset();
    $("#formcreate_sometimiento")[0].reset();
    $("#formcreate_compromisos")[0].reset();
    $("#formcreate_responsabilidades")[0].reset();

    if (publicidad_req_count > 3) {
        for (let i = 4; i <= publicidad_req_count; i++) {
            $("#3no" + i).parent('div').remove();
        }
        publicidad_req_count = 3;
    };
    if (sometimiento_doc_count > 7) {
        for (let i = 8; i <= sometimiento_doc_count; i++) {
            $("#7no" + i).parent('div').remove();
        }
        sometimiento_doc_count = 7;
    };
    if (responsabilidades_res_count > 10) {
        for (let i = 11; i <= responsabilidades_res_count; i++) {
            $("#9no" + i).parents('.p-2.rounded.border.border-5').remove();
        }
        responsabilidades_res_count = 10;
    };
}
// END borrar campos --- reset form

// Limpiar los campos - botones cancelar -
$('#btnCpresentacion').click(function(){
    borrar_campos();
    list_formatos();
})
$('#btnCconstanciaAnual').click(function(){
    borrar_campos();
    list_formatos();
})
$('#btnCpublicidad').click(function(){
    borrar_campos();
    list_formatos();
})
$('#btnCcodigotitulo').click(function(){
    borrar_campos();
    list_formatos();
})
$('#btnCsometimiento').click(function(){
    borrar_campos();
    list_formatos();
})
$('#btnCcompromisos').click(function() {
    borrar_campos();
    list_formatos();
})
$('#btnCresponsabilidades').click(function(){
    borrar_campos();
    list_formatos();
})
// END Limpiar campos - botones cancelar -

// Metodo para seleccionar el form del modal
function select_content_modal(documento_formato_id) {
    if (documento_formato_id == 1) {
        $("#createModalLabel").text('Nuevo Formato Presentación');
        $("#body-presentacion").show();
        $("#body-constanciaAnual").hide();
        $("#body-publicidad").hide();
        $("#body-codigoTitulo").hide();
        $("#body-sometimiento").hide();
        $("#body-compromisos").hide();
        $("#body-responsabilidades").hide();
    }
    if (documento_formato_id == 2) {
        $("#createModalLabel").text('Nuevo Formato Constancia Anual');
        $("#body-presentacion").hide();
        $("#body-constanciaAnual").show();
        $("#body-publicidad").hide();
        $("#body-codigoTitulo").hide();
        $("#body-sometimiento").hide();
        $("#body-compromisos").hide();
        $("#body-responsabilidades").hide();
    }
    if (documento_formato_id == 3) {
        $("#createModalLabel").text('Nuevo Formato Publicidad');
        $("#body-presentacion").hide();
        $("#body-constanciaAnual").hide();
        $("#body-publicidad").show();
        $("#body-codigoTitulo").hide();
        $("#body-sometimiento").hide();
        $("#body-compromisos").hide();
        $("#body-responsabilidades").hide();
    }
    if (documento_formato_id == 4) {
        $("#createModalLabel").text('Nuevo Formato Códigos y Títulos');
        $("#body-presentacion").hide();
        $("#body-constanciaAnual").hide();
        $("#body-publicidad").hide();
        $("#body-codigoTitulo").show();
        $("#body-sometimiento").hide();
        $("#body-compromisos").hide();
        $("#body-responsabilidades").hide();
    }
    if (documento_formato_id == 7) {
        $("#createModalLabel").text('Nuevo Formato Sometimiento');
        $("#body-presentacion").hide();
        $("#body-constanciaAnual").hide();
        $("#body-publicidad").hide();
        $("#body-codigoTitulo").hide();
        $("#body-sometimiento").show();
        $("#body-compromisos").hide();
        $("#body-responsabilidades").hide();
    }
    if (documento_formato_id == 8) {
        $("#createModalLabel").text('Nuevo Formato Compromisos');
        $("#body-presentacion").hide();
        $("#body-constanciaAnual").hide();
        $("#body-publicidad").hide();
        $("#body-codigoTitulo").hide();
        $("#body-sometimiento").hide();
        $("#body-compromisos").show();
        $("#body-responsabilidades").hide();
    }
    if (documento_formato_id == 9) {
        $("#createModalLabel").text('Nuevo Formato Responsabilidades');
        $("#body-presentacion").hide();
        $("#body-constanciaAnual").hide();
        $("#body-publicidad").hide();
        $("#body-codigoTitulo").hide();
        $("#body-sometimiento").hide();
        $("#body-compromisos").hide();
        $("#body-responsabilidades").show();
    }
}
// END Metodo para seleccionar form del modal


// Metodos para llenar campos con un select del form

// Llenar campos compromisos
$("#8no3").change(
    function() {
        rol = $("#8no3").val();
        $("#8no8").val(rol);
        $("#8no12").val(rol);
    }
)

// END para llenar campos



// Metodo para agregar y eliminar campos del modal de publicidad
var publicidad_req_count = 3;
$("#add_requisito").click(
    function() {
        publicidad_req_count++;
        // console.log(publicidad_req_count);

        var id_requisito = 'id="3no' + publicidad_req_count + '"';

        var fieldHTML = '<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-list"></i></span><input class="publicidad form-control" type="text" placeholder="Requisito" ' + id_requisito + ' value="" required/><button type="button" class="remove_button btn btn-danger" title="Eliminar campo"><i class="fas fa-minus-square"></i></button></div>'
        $("#wrapper_publicidad").append(fieldHTML);
    }
)
$("#wrapper_publicidad").on('click', '.remove_button', function(e) {
    e.preventDefault();

    var div = $(this).parents('#body-publicidad');

    $(this).parent('div').remove();

    var aux = 4;
    var auxId = '3no';
    var hijos = div.find(".publicidad");
    // console.log(hijos[0].id)
    $.each(hijos, function() {
        var aux_id = this.id;

        $("#"+ aux_id +"").prop('id', auxId + aux);

        aux++;
        // console.log(this);
    });

    publicidad_req_count--;
    // console.log(publicidad_req_count);
})
// END Agregar y eliminar campos del modal publicidad 

// Metodo para agregar y eliminar campos del modal de sometimiento
var sometimiento_doc_count = 7;
$("#add_documento").click(
    function() {
        sometimiento_doc_count++;
        // console.log(sometimiento_doc_count);

        var id_documento = 'id="7no' + sometimiento_doc_count + '"';

        var fieldHTML = '<div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span><input class="sometimiento form-control" type="text" placeholder="Nombre, version y Fecha del documento" ' + id_documento + ' value="" required/><button type="button" class="remove_button btn btn-danger" title="Eliminar campo"><i class="fas fa-minus-square"></i></button></div>'
        $("#wrapper_sometimiento").append(fieldHTML);
    }
)
$("#wrapper_sometimiento").on('click', '.remove_button', function(e) {
    e.preventDefault();

    var div = $(this).parents('#body-sometimiento');

    $(this).parent('div').remove();

    var aux = 8;
    var auxId = '7no';
    var hijos = div.find(".sometimiento");
    // console.log(hijos[0].id)
    $.each(hijos, function() {
        var aux_id = this.id;

        $("#"+ aux_id +"").prop('id', auxId + aux);

        aux++;
        // console.log(this);
    });

    sometimiento_doc_count--;
    // console.log(sometimiento_doc_count);
})
// END Agregar y eliminar campos del modal sometimiento

// Agregar y eliminar campos del modal responsabilidades
responsabilidades_res_count = 10;
$("#add_personal").click(
    function() {
        responsabilidades_res_count++;
        var id_nombre = 'id="9no' + responsabilidades_res_count + '"';

        responsabilidades_res_count++;
        var id_rol_estudio = 'id="9no' + responsabilidades_res_count + '"';

        responsabilidades_res_count++;
        var id_responsabilidades = '9no' + responsabilidades_res_count + '';

        begin = '<div class="p-2 rounded border border-5">';

        input_nombre = '<div class="form-group"><label class="form-label" name="' + id_nombre + '">Nombre</label>' +
        '<div class="input-group-prepend">' +
        '<span class="input-group-text"><i class="fas fa-file-alt"></i></span>' +
        '<input class="responsabilidades form-control" type="text" placeholder="Nombre" ' + id_nombre + ' value="" required/>' +
        '</div>' +
        '</div>'; 

        input_rol_estudio = '<div class="form-group"><label class="form-label" name="' + id_rol_estudio + '">Rol en el estudio</label>' +
        '<div class="input-group-prepend">' +
        '<span class="input-group-text"><i class="fas fa-user-circle"></i></span>' +
        '<input class="responsabilidades form-control" type="text" placeholder="Rol en el estudio" ' + id_rol_estudio + ' value="" required/>' +
        '</div>' +
        '</div>';

        begin_responsabilidades = '<div class="container form-group">' +
        '<label class="form-label" name="9no">Responsabilidades</label>';

        array_responsabilidades = [ "1 Conducir el estudio", "2 Selección de pacientes", "3 Firma de ICF", "4 Confirmar elegibilidad", "5 Examen físico",
            "6 Signos vitales", "7 Aleatorización", "8 Comunicación IVRS", "9 Prescripción de producto", "10 Dispensar medicamento", "11 Registro de medicamentos",
            "12 Control de medicamento", "13 Preparación y ministración de producto de investigación", "14 Terapias de rescate", "15 Finalizar tratamiento",
            "16 Evaluación de EA", "17 Información a los sujetos", "18 Entrega de materiales", "19 Obtener muestras biológicas", "20 Preparación de muestras",
            "21 ECG", "22 Recolectar datos", "23 Captura de datos CRF", "24 Actividades administrativas", "25 Aplicación de escalas",
            "26 Técnico radiólogo", "27 Dermatólogo", "28 Técnico en espirometría", "29 Oftalmólogo",
        ];

        input_responsabilidades = '';

        $.each(array_responsabilidades, function(i, val) {
            var aux = i + 1;
            if (i != 28) {
                if (i % 2 == 0) {
                    // Par
                    input_responsabilidades += '<div class="row">' +
                    '<div class="col-sm form-check">' +
                        '<label>' +
                        '<input type="checkbox" value="' + aux + '" name="' + id_responsabilidades + '[]" class="responsabilidades form-check-input">' +
                        // {!! Form::checkbox('9no10[]', 29, null,['class' => 'form-check-input']) !!}
                        val +
                        '</label>' +
                    '</div>';
                } else {
                    // Impar
                    input_responsabilidades += '<div class="col-sm form-check">' +
                        '<label>' +
                        '<input type="checkbox" value="' + aux + '" name="' + id_responsabilidades + '[]" class="responsabilidades form-check-input">' +
                        // {!! Form::checkbox('9no10[]', 29, null,['class' => 'form-check-input']) !!}
                        val +
                        '</label>' +
                    '</div>' +
                '</div>';
                }
            } else {
                input_responsabilidades += '<div class="row">' +
                    '<div class="col-sm form-check">' +
                        '<label>' +
                        '<input type="checkbox" value="' + aux + '" name="' + id_responsabilidades + '[]" class="responsabilidades form-check-input">' +
                        // {!! Form::checkbox('9no10[]', 29, null,['class' => 'form-check-input']) !!}
                        val +
                        '</label>' +
                    '</div>' +
                '</div>';
            }
        })

        end_responsabilidades = '</div>';

        end = '<div class="row">' +
        '<div class="col">' +
        '<button type="button" class="remove_button btn btn-block btn-danger" title="Eliminar campo"><i class="fas fa-minus-square"></i></button>' +
        '</div>' +
        '</div>' +
        '</div>';

        var fieldHTML = begin + input_nombre + input_rol_estudio + begin_responsabilidades + input_responsabilidades + end_responsabilidades + end;
        $("#wrapper_responsabilidades").append(fieldHTML);
    }
)
$("#wrapper_responsabilidades").on('click', '.remove_button', function(e) {
    e.preventDefault();

    var div = $(this).parents('#body-responsabilidades');
    // console.log(div.find(".responsabilidades").length)

    $(this).parents('.p-2.rounded.border.border-5').remove();

    var aux = 11;
    var aux2 = 1;
    var auxId = '9no';
    var hijos = div.find(".responsabilidades");
    // console.log(hijos[0].id)
    $.each(hijos, function(i, val) {
        // console.log(i);
        // var aux_id = this.id;

        if (aux2 < 3) {
            var aux_id = this.id;
            $("#"+ aux_id +"").prop('id', auxId + aux);
            aux++;
            aux2++;
        } else {
            var aux_id = this.name;
            // $('input[name="' + aux_id + '[]"')[i].prop('name', aux_id + aux);
            // $('input[name="' + aux_id + '[]"').eq(i).attr('id', '9no' + aux + '[]');
            $('input[name="' + aux_id + '"').prop('name', '9no' + aux + '[]');
            aux2++;
            if (aux2 == 32) {
                aux++;
                aux2 = 1;
            }
        }

        console.log(this);
    });

    responsabilidades_res_count -= 3;
    // console.log(responsabilidades_res_count);
})
// END Agregar y eliminar campos del modal responsabilidades



// Metodos submit de los forms 
// Submit - presentacion
$('#formcreate_presentacion').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    formato_id = $('#formato_id').val();
    documentoformato_id = $("#doc_formatos").val();
    proyecto_id = $('#no0').val();
    empresa_id = $('#empresa_id').val();
    menu_id = $('#menu_id').val();
    user_id = $('#user_id').val();
    
    
    formData.append('formato_id', formato_id);
    formData.append('documentoformato_id', documentoformato_id);
    formData.append('proyecto_id', proyecto_id);
    // TODO: En el controller usar el empresa_id de los providers
    formData.append('empresa_id', empresa_id);
    formData.append('menu_id', menu_id);
    formData.append('user_id', user_id);
    // formData.append('_token', $('input[name=_token]').val()); 

    if (!formato_id) {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                // dataType: 'json',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue guardado correctamente', 'Guardar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato ya se encuentra dado de alta', 'Guardar formato', {timeOut:3000});
                    }
    
                }
            });
        }else{
            alert("Seleccione un proyecto");
        }
    } else {
        if(documentoformato_id!="" && proyecto_id ){

            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue actualizado correctamente', 'Editar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato no se actualizo correctamente', 'Editar formato', {timeOut:3000});
                    }
                    $('#formato_id').val(null);
                }
            });

        }else{
            alert("Seleccione un proyecto");
        }
    }
    
});
// END Submit - presentacion


// Submit - constancia anual
$('#formcreate_constanciaAnual').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    formato_id = $('#formato_id').val();
    documentoformato_id = $("#doc_formatos").val();
    proyecto_id = $('#no0').val();
    empresa_id = $('#empresa_id').val();
    menu_id = $('#menu_id').val();
    user_id = $('#user_id').val();
    
    
    formData.append('formato_id', formato_id);
    formData.append('documentoformato_id', documentoformato_id);
    formData.append('proyecto_id', proyecto_id);
    // TODO: En el controller usar el empresa_id de los providers
    formData.append('empresa_id', empresa_id);
    formData.append('menu_id', menu_id);
    formData.append('user_id', user_id);
    // formData.append('_token', $('input[name=_token]').val()); 

    if (!formato_id) {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                // dataType: 'json',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue guardado correctamente', 'Guardar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato ya se encuentra dado de alta', 'Guardar formato', {timeOut:3000});
                    }
    
                }
            });
        }else{
            alert("Seleccione un proyecto");
        }
    } else {
        if(documentoformato_id!="" && proyecto_id ){

            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue actualizado correctamente', 'Editar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato no se actualizo correctamente', 'Editar formato', {timeOut:3000});
                    }
                    $('#formato_id').val(null);
                }
            });

        }else{
            alert("Seleccione un proyecto");
        }
    }
    
});
// END submit constancia anual


// Submit publicidad 
$('#formcreate_publicidad').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    formato_id = $('#formato_id').val();
    documentoformato_id = $("#doc_formatos").val();
    proyecto_id = $('#no0').val();
    empresa_id = $('#empresa_id').val();
    menu_id = $('#menu_id').val();
    user_id = $('#user_id').val();
    
    
    formData.append('formato_id', formato_id);
    formData.append('documentoformato_id', documentoformato_id);
    formData.append('proyecto_id', proyecto_id);
    // TODO: En el controller usar el empresa_id de los providers
    formData.append('empresa_id', empresa_id);
    formData.append('menu_id', menu_id);
    formData.append('user_id', user_id);
    // formData.append('_token', $('input[name=_token]').val()); 

    // console.log(publicidad_req_count);
    if (publicidad_req_count > 3) {
        for (let i = 4; i <= publicidad_req_count; i++) {
            var idAppend = "3no" + i;
            var value = $("#" + idAppend).val();
            formData.append(idAppend, value);
        }
    }

    if (!formato_id) {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                // dataType: 'json',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);

                    if (publicidad_req_count > 3) {
                        for (let i = 4; i <= publicidad_req_count; i++) {
                            $("#3no" + i).parent('div').remove();
                        }
                        publicidad_req_count = 3;
                    };
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue guardado correctamente', 'Guardar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos()
                        toastr.warning('El formato ya se encuentra dado de alta', 'Guardar formato', {timeOut:3000});
                    };
    
                }
            });
        }else{
            alert("Seleccione un proyecto");
        }
    } else {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);

                    if (publicidad_req_count > 3) {
                        for (let i = 4; i <= publicidad_req_count; i++) {
                            $("#3no" + i).parent('div').remove();
                        }
                        publicidad_req_count = 3;
                    };
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue actualizado correctamente', 'Editar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato no se actualizo correctamente', 'Editar formato', {timeOut:3000});
                    }
                    $('#formato_id').val(null);
                }
            });

        }else{
            alert("Seleccione un proyecto");
        }
    }
    
});
// END Submit publicidad 


// Submit Codigo y titulo
$('#formcreate_codigoTitulo').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    formato_id = $('#formato_id').val();
    documentoformato_id = $("#doc_formatos").val();
    proyecto_id = $('#no0').val();
    empresa_id = $('#empresa_id').val();
    menu_id = $('#menu_id').val();
    user_id = $('#user_id').val();
    
    
    formData.append('formato_id', formato_id);
    formData.append('documentoformato_id', documentoformato_id);
    formData.append('proyecto_id', proyecto_id);
    // TODO: En el controller usar el empresa_id de los providers
    formData.append('empresa_id', empresa_id);
    formData.append('menu_id', menu_id);
    formData.append('user_id', user_id);
    // formData.append('_token', $('input[name=_token]').val()); 

    if (!formato_id) {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                // dataType: 'json',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue guardado correctamente', 'Guardar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato ya se encuentra dado de alta', 'Guardar formato', {timeOut:3000});
                    }
    
                }
            });
        }else{
            alert("Seleccione un proyecto");
        }
    } else {
        if(documentoformato_id!="" && proyecto_id ){

            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue actualizado correctamente', 'Editar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato no se actualizo correctamente', 'Editar formato', {timeOut:3000});
                    }
                    $('#formato_id').val(null);
                }
            });

        }else{
            alert("Seleccione un proyecto");
        }
    }
    
});
// END Submit Codigo y titulo 


// Submit publicidad 
$('#formcreate_sometimiento').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    formato_id = $('#formato_id').val();
    documentoformato_id = $("#doc_formatos").val();
    proyecto_id = $('#no0').val();
    empresa_id = $('#empresa_id').val();
    menu_id = $('#menu_id').val();
    user_id = $('#user_id').val();
    
    
    formData.append('formato_id', formato_id);
    formData.append('documentoformato_id', documentoformato_id);
    formData.append('proyecto_id', proyecto_id);
    // TODO: En el controller usar el empresa_id de los providers
    formData.append('empresa_id', empresa_id);
    formData.append('menu_id', menu_id);
    formData.append('user_id', user_id);
    // formData.append('_token', $('input[name=_token]').val()); 

    // console.log(sometimiento_doc_count);
    if (sometimiento_doc_count > 7) {
        for (let i = 8; i <= sometimiento_doc_count; i++) {
            var idAppend = "7no" + i;
            var value = $("#" + idAppend).val();
            formData.append(idAppend, value);
        }
    }

    if (!formato_id) {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                // dataType: 'json',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);

                    if (sometimiento_doc_count > 7) {
                        for (let i = 8; i <= sometimiento_doc_count; i++) {
                            $("#7no" + i).parent('div').remove();
                        }
                        sometimiento_doc_count = 7;
                    };
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue guardado correctamente', 'Guardar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos()
                        toastr.warning('El formato ya se encuentra dado de alta', 'Guardar formato', {timeOut:3000});
                    };
    
                }
            });
        }else{
            alert("Seleccione un proyecto");
        }
    } else {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);

                    if (sometimiento_doc_count > 7) {
                        for (let i = 8; i <= sometimiento_doc_count; i++) {
                            $("#7no" + i).parent('div').remove();
                        }
                        sometimiento_doc_count = 7;
                    };
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue actualizado correctamente', 'Editar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato no se actualizo correctamente', 'Editar formato', {timeOut:3000});
                    }
                    $('#formato_id').val(null);
                }
            });

        }else{
            alert("Seleccione un proyecto");
        }
    }
    
});
// END Submit publicidad 

// Submit Compromisos
$('#formcreate_compromisos').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    formato_id = $('#formato_id').val();
    documentoformato_id = $("#doc_formatos").val();
    proyecto_id = $('#no0').val();
    empresa_id = $('#empresa_id').val();
    menu_id = $('#menu_id').val();
    user_id = $('#user_id').val();
    
    
    formData.append('formato_id', formato_id);
    formData.append('documentoformato_id', documentoformato_id);
    formData.append('proyecto_id', proyecto_id);
    // TODO: En el controller usar el empresa_id de los providers
    formData.append('empresa_id', empresa_id);
    formData.append('menu_id', menu_id);
    formData.append('user_id', user_id);
    // formData.append('_token', $('input[name=_token]').val()); 

    if (!formato_id) {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                // dataType: 'json',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue guardado correctamente', 'Guardar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato ya se encuentra dado de alta', 'Guardar formato', {timeOut:3000});
                    }
    
                }
            });
        }else{
            alert("Seleccione un proyecto");
        }
    } else {
        if(documentoformato_id!="" && proyecto_id ){

            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue actualizado correctamente', 'Editar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato no se actualizo correctamente', 'Editar formato', {timeOut:3000});
                    }
                    $('#formato_id').val(null);
                }
            });

        }else{
            alert("Seleccione un proyecto");
        }
    }
    
});
// END Submit Compromisos


// Submit Responsabilidades
$('#formcreate_responsabilidades').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    formato_id = $('#formato_id').val();
    documentoformato_id = $("#doc_formatos").val();
    proyecto_id = $('#no0').val();
    empresa_id = $('#empresa_id').val();
    menu_id = $('#menu_id').val();
    user_id = $('#user_id').val();
    
    
    formData.append('formato_id', formato_id);
    formData.append('documentoformato_id', documentoformato_id);
    formData.append('proyecto_id', proyecto_id);
    // TODO: En el controller usar el empresa_id de los providers
    formData.append('empresa_id', empresa_id);
    formData.append('menu_id', menu_id);
    formData.append('user_id', user_id);
    // formData.append('_token', $('input[name=_token]').val()); 

    // console.log(responsabilidades_res_count);
    if (responsabilidades_res_count > 10) {
        auxCount = 1;
        for (let i = 11; i <= responsabilidades_res_count; i++) {
            if (auxCount < 3) {
                var idAppend = "9no" + i;
                var value = $("#" + idAppend).val();
                formData.append(idAppend, value);
                auxCount++;
            } else {
                auxCount = 1;
            }
        }
    }

    if (!formato_id) {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                // dataType: 'json',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);

                    if (responsabilidades_res_count > 10) {
                        for (let i = 11; i <= responsabilidades_res_count; i++) {
                            $("#9no" + i).parents('.p-2.rounded.border.border-5').remove();
                        }
                        responsabilidades_res_count = 10;
                    };
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue guardado correctamente', 'Guardar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos()
                        toastr.warning('El formato ya se encuentra dado de alta', 'Guardar formato', {timeOut:3000});
                    };
    
                }
            });
        }else{
            alert("Seleccione un proyecto");
        }
    } else {
        if(documentoformato_id!="" && proyecto_id ){
            $.ajax({
                url: "/documentos/create_formato",
                type:'post',
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                beforeSend:function(){
                    $('#btnGpresentacion').hide();
                },
                success:function(resp){
    
                    // console.log(resp);

                    if (responsabilidades_res_count > 10) {
                        for (let i = 11; i <= responsabilidades_res_count; i++) {
                            $("#9no" + i).parents('.p-2.rounded.border.border-5').remove();
                        }
                        responsabilidades_res_count = 10;
                    };
    
                    if(resp){
                        $('#createFormatoModal').modal('hide');
                        toastr.success('El formato fue actualizado correctamente', 'Editar formato', {timeOut:3000});
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        list_formatos(documentoformato_id);
                    }else{
                        $('#createFormatoModal').modal('hide');
                        $('#btnGpresentacion').show();
                        borrar_campos();
                        toastr.warning('El formato no se actualizo correctamente', 'Editar formato', {timeOut:3000});
                    }
                    $('#formato_id').val(null);
                }
            });

        }else{
            alert("Seleccione un proyecto");
        }
    }
    
});
// END Submit Responsabilidades