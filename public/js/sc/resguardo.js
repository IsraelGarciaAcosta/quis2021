$(document).ready(function() {
    $('#tbl_integridad').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    $('#tbl_entrada').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    $('#tbl_material').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    $('#tbl_equipo').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    list_integridad();
} );

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

$("input[name='no2']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div2").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div2").style.backgroundColor="#FFF";
    }
});

$("input[name='no5']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div5").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div5").style.backgroundColor="#FFF";
    }
});


function Salir(){
    window.location.href = "/resguardo";
 }

$('#btnCancelar').click(function(){
    window.location.href = "/resguardo";
});

function Guardar(){
    $('#overlay').show();
    $('#formcreate_resguardo').submit();
}

function GuardarCambios(){
    $('#overlay').show();
    $('#formedit_resguardo').submit();
}



function CreateIntegridad(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    $('#empresaid_integridad').val(empresa_id);
    $('#proyectoid_integridad').val(proyecto_id);
    $('#id_intergidad').val("");
    $('#no1').val("");
    $('#no3').val("");
    $('#no4').val("");
    $('#no6').val("");
    $('#no2_si').attr('checked', false);
    $('#no2_no').attr('checked', false);
    $('#no5_si').attr('checked', false);
    $('#no5_no').attr('checked', false);
    $('#createIntegridadModal').modal('toggle');
}

function CreateEntrada(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    $('#empresaid_entrada').val(empresa_id);
    $('#proyectoid_entrada').val(proyecto_id);
    $('#id_entrada').val("");
    $('#no7').val("");
    $('#no8').val("");
    $('#no9').val("");
    $('#no10').val("");
    $('#no11').val("");
    $('#no12').val("");
    $('#no13').val("");
    $('#no14').val("");
    $('#no15').val("");
    $('#no16').val("");
    $('#no17').val("");
    $('#no18').val("");
    $('#no19').val("");
    $('#no20').val("");
    $('#no21').val("");
    $('#no23').val("");
    $('#no22_si').attr('checked', false);
    $('#no22_no').attr('checked', false);
    $('#createEntradaModal').modal('toggle');
}

function CreateMaterial(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    $('#empresaid_material').val(empresa_id);
    $('#proyectoid_material').val(proyecto_id);
    $('#id_material').val("");
    $('#no24').val("");
    $('#no25').val("");
    $('#no26').val("");
    $('#anaquel_1').attr('checked', false);
    $('#anaquel_2').attr('checked', false);
    $('#anaquel_3').attr('checked', false);
    $('#anaquel_4').attr('checked', false);
    $('#repisa_A').attr('checked', false);
    $('#repisa_B').attr('checked', false);
    $('#repisa_C').attr('checked', false);
    $('#repisa_D').attr('checked', false);
    $('#repisa_E').attr('checked', false);
    $('#repisa_F').attr('checked', false);
    $('#espacio_1').attr('checked', false);
    $('#espacio_2').attr('checked', false);
    $('#espacio_3').attr('checked', false);
    $('#createMaterialModal').modal('toggle');
}

function CreateEquipo(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    $('#empresaid_equipo').val(empresa_id);
    $('#proyectoid_equipo').val(proyecto_id);
    $('#id_equipo').val("");
    $('#no27').val("");
    $('#no28').val("");
    $('#no29').val("");
    $('#no30').val("");
    $('#no31').val("");
    $('#no32').val("");
    $('#createEquipoModal').modal('toggle');
}




//MODALS INTEGRIDAD
function list_integridad(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    var list = $('#tbl_integridad').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/resguardo/list_integridad",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                proyecto_id:proyecto_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'fecha'},
            {"data": 'tipo'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_integridad').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no1=$('#no1').val();
    empresa_id=$('#empresaid_integridad').val();
    proyecto_id=$('#proyectoid_integridad').val();
    if(no1!=""){
        $.ajax({
            url: "/resguardo/create_integridad",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGIntegridad').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createIntegridadModal').modal('hide');
                    toastr.success('La recepción fue guardada correctamente', 'Guardar integridad', {timeOut:3000});
                    $('#btnGIntegridad').show();
                    //list_integridad();
                    location.reload();
                }else{
                    $('#btnGIntegridad').show();
                    toastr.warning('La fecha de recepción ya se encuentra dada de alta', 'Guardar integridad', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de recepción vacía");
    }
});

function edit_integridad(id_integridad){
    $.ajax({
        url: "/resguardo/edit_integridad",
        method:'POST',
        dataType: 'json',
        data:{id_integridad:id_integridad, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_integridad').val(this.empresa_id);
                $('#proyectoid_integridad').val(this.proyecto_id);
                $('#id_integridad').val(id_integridad);
                $('#no1').val(this.no1);
                $('#no3').val(this.no3);
                $('#no4').val(this.no4);
                $('#no6').val(this.no6);
                if(this.no2 == "Si"){
                    $('#no2_si').attr('checked', true);
                }else if(this.no2 == "No"){
                    $('#no2_no').attr('checked', true);
                }else{
                    $('#no2_si').attr('checked', false);
                    $('#no2_no').attr('checked', false);
                }
                if(this.no5 == "Si"){
                    $('#no5_si').attr('checked', true);
                }else if(this.no5 == "No"){
                    $('#no5_no').attr('checked', true);
                }else{
                    $('#no5_si').attr('checked', false);
                    $('#no5_no').attr('checked', false);
                }
                $('#createIntegridadModal').modal('toggle');
            });
        }
    });
}

function delete_integridad(id_integridad){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/resguardo/delete_integridad",
            method:'POST',
            type: 'post',
            data:{id_integridad:id_integridad, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La recepción fue eliminada correctamente', 'Eliminar integridad', {timeOut:3000});
                    list_integridad();
                }
            }
        });
    })
}





//MODALS ENTRADA
function list_entrada(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    var list = $('#tbl_entrada').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/resguardo/list_entrada",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                proyecto_id:proyecto_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'fecha'},
            {"data": 'nombre'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_entrada').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no7=$('#no7').val();
    empresa_id=$('#empresaid_entrada').val();
    proyecto_id=$('#proyectoid_entrada').val();
    if(no7!=""){
        $.ajax({
            url: "/resguardo/create_entrada",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGEntrada').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createEntradaModal').modal('hide');
                    toastr.success('La recepción fue guardada correctamente', 'Guardar entrada', {timeOut:3000});
                    $('#btnGEntrada').show();
                    list_entrada();
                }else{
                    $('#btnGEntrada').show();
                    toastr.warning('La fecha de recepción ya se encuentra dada de alta', 'Guardar entrada', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de recepción vacía");
    }
});

function edit_entrada(id_entrada){
    $.ajax({
        url: "/resguardo/edit_entrada",
        method:'POST',
        dataType: 'json',
        data:{id_entrada:id_entrada, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_entrada').val(this.empresa_id);
                $('#proyectoid_entrada').val(this.proyecto_id);
                $('#id_entrada').val(id_entrada);
                $('#no7').val(this.no7);
                $('#no8').val(this.no8);
                $('#no9').val(this.no9);
                $('#no10').val(this.no10);
                $('#no11').val(this.no11);
                $('#no12').val(this.no12);
                $('#no13').val(this.no13);
                $('#no14').val(this.no14);
                $('#no15').val(this.no15);
                $('#no16').val(this.no16);
                $('#no17').val(this.no17);
                $('#no18').val(this.no18);
                $('#no19').val(this.no19);
                $('#no20').val(this.no20);
                $('#no21').val(this.no21);
                $('#no23').val(this.no23);
                if(this.no22 == "Si"){
                    $('#no22_si').attr('checked', true);
                }else if(this.no22 == "No"){
                    $('#no22_no').attr('checked', true);
                }else{
                    $('#no22_si').attr('checked', false);
                    $('#no22_no').attr('checked', false);
                }
                $('#createEntradaModal').modal('toggle');
            });
        }
    });
}

function delete_entrada(id_entrada){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/resguardo/delete_entrada",
            method:'POST',
            type: 'post',
            data:{id_entrada:id_entrada, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La recepción fue eliminada correctamente', 'Eliminar entrada', {timeOut:3000});
                    list_entrada();
                }
            }
        });
    })
}





//MODALS MATERIAL
function list_material(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    var list = $('#tbl_material').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/resguardo/list_material",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                proyecto_id:proyecto_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'fecha'},
            {"data": 'gabinete'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_material').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no24=$('#no24').val();
    empresa_id=$('#empresaid_material').val();
    proyecto_id=$('#proyectoid_material').val();
    if(no24!=""){
        $.ajax({
            url: "/resguardo/create_material",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGMaterial').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createMaterialModal').modal('hide');
                    toastr.success('La recepción fue guardada correctamente', 'Guardar material', {timeOut:3000});
                    $('#btnGMaterial').show();
                    list_material();
                }else{
                    $('#btnGMaterial').show();
                    toastr.warning('La fecha de recepción ya se encuentra dada de alta', 'Guardar material', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de recepción vacía");
    }
});

function edit_material(id_material){
    $.ajax({
        url: "/resguardo/edit_material",
        method:'POST',
        dataType: 'json',
        data:{id_material:id_material, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_material').val(this.empresa_id);
                $('#proyectoid_material').val(this.proyecto_id);
                $('#id_material').val(id_material);
                $('#no24').val(this.no24);
                $('#no25').val(this.no25);
                $('#no26').val(this.no26);
                $('#createMaterialModal').modal('toggle');
            });
        }
    });
}

function delete_material(id_material){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/resguardo/delete_material",
            method:'POST',
            type: 'post',
            data:{id_material:id_material, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La recepción fue eliminada correctamente', 'Eliminar material', {timeOut:3000});
                    list_material();
                }
            }
        });
    })
}





//MODALS EQUIPO
function list_equipo(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    var list = $('#tbl_equipo').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/resguardo/list_equipo",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                proyecto_id:proyecto_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'fecha'},
            {"data": 'nombre'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_equipo').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no27=$('#no27').val();
    empresa_id=$('#empresaid_equipo').val();
    proyecto_id=$('#proyectoid_equipo').val();
    if(no27!=""){
        $.ajax({
            url: "/resguardo/create_equipo",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGEquipo').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createEquipoModal').modal('hide');
                    toastr.success('La recepción fue guardada correctamente', 'Guardar equipo', {timeOut:3000});
                    $('#btnGEquipo').show();
                    list_equipo();
                }else{
                    $('#btnGEquipo').show();
                    toastr.warning('La fecha de recepción ya se encuentra dada de alta', 'Guardar equipo', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de recepción vacía");
    }
});

function edit_equipo(id_equipo){
    $.ajax({
        url: "/resguardo/edit_equipo",
        method:'POST',
        dataType: 'json',
        data:{id_equipo:id_equipo, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_equipo').val(this.empresa_id);
                $('#proyectoid_equipo').val(this.proyecto_id);
                $('#id_equipo').val(id_equipo);
                $('#no27').val(this.no27);
                $('#no28').val(this.no28);
                $('#no29').val(this.no29);
                $('#no30').val(this.no30);
                $('#no31').val(this.no31);
                $('#no32').val(this.no32);
                $('#createEquipoModal').modal('toggle');
            });
        }
    });
}

function delete_equipo(id_equipo){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/resguardo/delete_equipo",
            method:'POST',
            type: 'post',
            data:{id_equipo:id_equipo, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La recepción fue eliminada correctamente', 'Eliminar equipo', {timeOut:3000});
                    list_equipo();
                }
            }
        });
    })
}

