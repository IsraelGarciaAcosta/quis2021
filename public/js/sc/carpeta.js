$(document).ready(function() {

    $('#tbl_farmacista').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    $('#tbl_control').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    $('#tbl_tramite').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    $('#tbl_verificacion').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    $('#tbl_atencion').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });
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



$("input[name='no20']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div20").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div20").style.backgroundColor="#FFF";
    }
});

$("input[name='no21']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div21").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div21").style.backgroundColor="#FFF";
    }
});

$("input[name='no22']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div22").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div22").style.backgroundColor="#FFF";
    }
});

$("input[name='no23']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div23").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div23").style.backgroundColor="#FFF";
    }
});

$("input[name='no24']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div24").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div24").style.backgroundColor="#FFF";
    }
});

$("input[name='no25']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div25").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div25").style.backgroundColor="#FFF";
    }
});

$("input[name='no26']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div26").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div26").style.backgroundColor="#FFF";
    }
});

$("input[name='no27']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div27").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div27").style.backgroundColor="#FFF";
    }
});

$("input[name='no28']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div28").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div28").style.backgroundColor="#FFF";
    }
});

$("input[name='no29']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div29").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div29").style.backgroundColor="#FFF";
    }
});

$("input[name='no30']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div30").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div30").style.backgroundColor="#FFF";
    }
});

$("input[name='no31']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div31").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div31").style.backgroundColor="#FFF";
    }
});

$("input[name='no32']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div32").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div32").style.backgroundColor="#FFF";
    }
});

$("input[name='no33']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div33").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div33").style.backgroundColor="#FFF";
    }
});

$("input[name='no34']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div34").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div34").style.backgroundColor="#FFF";
    }
});

$("input[name='no35']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div35").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div35").style.backgroundColor="#FFF";
    }
});

$("input[name='no36']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div36").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div36").style.backgroundColor="#FFF";
    }
});


function Salir(){
    $('#confirmModal').modal('show');
 }

$('#btnCancelar').click(function(){
    window.location.href = "/carpeta";
});

function Guardar(){
    $('#overlay').show();
    $('#formcreate_carpeta').submit();
}

function GuardarCambios(){
    $('#overlay').show();
    $('#formedit_carpeta').submit();
}



function CreateFarmacista(){
    no1=$('#no1').val();
    empresa_id=$('#empresa_id').val();
    id=$('#carpeta_id').val();
    $('#empresaid_farmacista').val(empresa_id);
    $('#id_farmacista').val("");
    $('#no7').val("");
    $('#no8').val("");
    $('#no15').val("");
    $('#no16').val("");
    $('#no17').val("");
    $('#no18').val("");
    $('#no9_si').attr('checked', false);
    $('#no9_no').attr('checked', false);
    $('#no10_si').attr('checked', false);
    $('#no10_no').attr('checked', false);
    $('#no11_si').attr('checked', false);
    $('#no11_no').attr('checked', false);
    $('#no12_si').attr('checked', false);
    $('#no12_no').attr('checked', false);
    $('#no13_si').attr('checked', false);
    $('#no13_no').attr('checked', false);
    $('#no14_si').attr('checked', false);
    $('#no14_no').attr('checked', false);
    if(id==""){
        if(no1!=""){
            form=$('#formcreate_carpeta').serialize();
            $.ajax({
                url: "/carpeta/guardar_carpeta",
                type:'post',
                data:form,
                success:function(resp){
                    $('#carpetaid_farmacista').val(resp);
                    $('#carpeta_id').val(resp);
                    $('#createFarmacistaModal').modal('toggle');
                }
            });
        }else{
            alert("No puede estar el nombre del responsable sanitario vacío");
        }
    }else{
        $('#carpetaid_farmacista').val(id);
        $('#createFarmacistaModal').modal('toggle');
    }
}


function CreateControl(){
    no1=$('#no1').val();
    empresa_id=$('#empresa_id').val();
    id=$('#carpeta_id').val();
    $('#empresaid_control').val(empresa_id);
    $('#id_control').val("");
    $('#no19').val("");
    for(a=20; a<=36; a++){
        $('#no'+a+'_si').attr('checked', false);
        $('#no'+a+'_no').attr('checked', false);
    }
    if(id==""){
        if(no1!=""){
            form=$('#formcreate_control').serialize();
            $.ajax({
                url: "/carpeta/guardar_carpeta",
                type:'post',
                data:form,
                success:function(resp){
                    $('#carpetaid_control').val(resp);
                    $('#carpeta_id').val(resp);
                    $('#createControlModal').modal('toggle');
                }
            });
        }else{
            alert("No puede estar el nombre del responsable sanitario vacío");
        }
    }else{
        $('#carpetaid_control').val(id);
        $('#createControlModal').modal('toggle');
    }
}


function CreateTramite(){
    no1=$('#no1').val();
    empresa_id=$('#empresa_id').val();
    id=$('#carpeta_id').val();
    $('#empresaid_tramite').val(empresa_id);
    $('#id_tramite').val("");
    $('#no37').val("");
    $('#no38').val("");
    $('#no40').val("");
    $('#no39_si').attr('checked', false);
    $('#no39_no').attr('checked', false);
    if(id==""){
        if(no1!=""){
            form=$('#formcreate_tramite').serialize();
            $.ajax({
                url: "/carpeta/guardar_carpeta",
                type:'post',
                data:form,
                success:function(resp){
                    $('#carpetaid_tramite').val(resp);
                    $('#carpeta_id').val(resp);
                    $('#createTramiteModal').modal('toggle');
                }
            });
        }else{
            alert("No puede estar el nombre del responsable sanitario vacío");
        }
    }else{
        $('#carpetaid_tramite').val(id);
        $('#createTramiteModal').modal('toggle');
    }
}

function CreateVerificacion(){
    no1=$('#no1').val();
    empresa_id=$('#empresa_id').val();
    id=$('#carpeta_id').val();
    $('#empresaid_verificacion').val(empresa_id);
    $('#id_verificacion').val("");
    $('#no41').val("");
    $('#no42').val("");
    $('#no43').val("");
    if(id==""){
        if(no1!=""){
            form=$('#formcreate_verificacion').serialize();
            $.ajax({
                url: "/carpeta/guardar_carpeta",
                type:'post',
                data:form,
                success:function(resp){
                    $('#carpetaid_verificacion').val(resp);
                    $('#carpeta_id').val(resp);
                    $('#createVerificacionModal').modal('toggle');
                }
            });
        }else{
            alert("No puede estar el nombre del responsable sanitario vacío");
        }
    }else{
        $('#carpetaid_verificacion').val(id);
        $('#createVerificacionModal').modal('toggle');
    }
}


function CreateAtencion(){
    no1=$('#no1').val();
    empresa_id=$('#empresa_id').val();
    id=$('#carpeta_id').val();
    $('#empresaid_atencion').val(empresa_id);
    $('#id_atencion').val("");
    $('#no44').val("");
    $('#no45').val("");
    $('#no46').val("");
    $('#no47').val("");
    $('#no48').val("");
    if(id==""){
        if(no1!=""){
            form=$('#formcreate_atencion').serialize();
            $.ajax({
                url: "/carpeta/guardar_carpeta",
                type:'post',
                data:form,
                success:function(resp){
                    $('#carpetaid_atencion').val(resp);
                    $('#carpeta_id').val(resp);
                    $('#createAtencionModal').modal('toggle');
                }
            });
        }else{
            alert("No puede estar el nombre del responsable sanitario vacío");
        }
    }else{
        $('#carpetaid_atencion').val(id);
        $('#createAtencionModal').modal('toggle');
    }
}


//MODALS FARMACISTA
function list_farmacista(){
    empresa_id=$('#empresa_id').val();
    carpeta_id=$('#carpeta_id').val();
    var list = $('#tbl_farmacista').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/carpeta/list_farmacista",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                carpeta_id:carpeta_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'nombre'},
            {"data": 'inicio'},
            {"data": 'fin'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_farmacista').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no7=$('#no7').val();
    id=$('#carpetaid_farmacista').val();
    empresa_id=$('#empresaid_farmacista').val();
    if(no7!=""){
        $.ajax({
            url: "/carpeta/create_farmacista",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGFarmacista').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createFarmacistaModal').modal('hide');
                    toastr.success('El farmacista fue guardado correctamente', 'Guardar farmacista', {timeOut:3000});
                    if(id==""){
                        location.href=id+"/edit";
                    }else{
                        $('#btnGFarmacista').show();
                        list_farmacista();
                    }
                }else{
                    $('#btnGFarmacista').show();
                    toastr.warning('El farmacista ya se encuentra dado de alta', 'Guardar farmacista', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar el nombre del farmacista vacío");
    }
});

function edit_farmacista(id_farmacista){
    $.ajax({
        url: "/carpeta/edit_farmacista",
        method:'POST',
        dataType: 'json',
        data:{id_farmacista:id_farmacista, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_farmacista').val(this.empresa_id);
                $('#carpetaid_farmacista').val(this.carpeta_id);
                $('#id_farmacista').val(id_farmacista);
                $('#no7').val(this.no7);
                $('#no8').val(this.no8);
                $('#no15').val(this.no15);
                $('#no16').val(this.no16);
                $('#no17').val(this.no17);
                $('#no18').val(this.no18);
                if(this.no9 == "Si"){
                    $('#no9_si').attr('checked', true);
                }else if(this.no9 == "No"){
                    $('#no9_no').attr('checked', true);
                }else{
                    $('#no9_si').attr('checked', false);
                    $('#no9_no').attr('checked', false);
                }
                if(this.no10 == "Si"){
                    $('#no10_si').attr('checked', true);
                }else if(this.no10 == "No"){
                    $('#no10_no').attr('checked', true);
                }else{
                    $('#no10_si').attr('checked', false);
                    $('#no10_no').attr('checked', false);
                }
                if(this.no11 == "Si"){
                    $('#no11_si').attr('checked', true);
                }else if(this.no11 == "No"){
                    $('#no11_no').attr('checked', true);
                }else{
                    $('#no11_si').attr('checked', false);
                    $('#no11_no').attr('checked', false);
                }
                if(this.no12 == "Si"){
                    $('#no12_si').attr('checked', true);
                }else if(this.no12 == "No"){
                    $('#no12_no').attr('checked', true);
                }else{
                    $('#no12_si').attr('checked', false);
                    $('#no12_no').attr('checked', false);
                }
                if(this.no13 == "Si"){
                    $('#no13_si').attr('checked', true);
                }else if(this.no13 == "No"){
                    $('#no13_no').attr('checked', true);
                }else{
                    $('#no13_si').attr('checked', false);
                    $('#no13_no').attr('checked', false);
                }
                if(this.no14 == "Si"){
                    $('#no14_si').attr('checked', true);
                }else if(this.no14 == "No"){
                    $('#no14_no').attr('checked', true);
                }else{
                    $('#no14_si').attr('checked', false);
                    $('#no14_no').attr('checked', false);
                }
                $('#createFarmacistaModal').modal('toggle');
            });
        }
    });
}

function delete_farmacista(id_farmacista){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/carpeta/delete_farmacista",
            method:'POST',
            type: 'post',
            data:{id_farmacista:id_farmacista, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('El farmacista fue eliminado correctamente', 'Eliminar farmacista', {timeOut:3000});
                    list_farmacista();
                }
            }
        });
    })
}




//MODALS CONTROL
function list_control(){
    empresa_id=$('#empresa_id').val();
    carpeta_id=$('#carpeta_id').val();
    var list = $('#tbl_control').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/carpeta/list_control",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                carpeta_id:carpeta_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'fecha_revision'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_control').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no19=$('#no19').val();
    id=$('#carpetaid_control').val();
    empresa_id=$('#empresaid_control').val();
    if(no19!=""){
        $.ajax({
            url: "/carpeta/create_control",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGControl').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createControlModal').modal('hide');
                    toastr.success('La revisión fue guardada correctamente', 'Guardar control', {timeOut:3000});
                    if(id==""){
                        //location.href=proyecto_id+"/edit";
                    }else{
                        $('#btnGControl').show();
                        list_control();
                    }
                }else{
                    $('#btnGControl').show();
                    toastr.warning('La revisión ya se encuentra dada de alta', 'Guardar control', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de revisión vacía");
    }
});

function edit_control(id_control){
    $.ajax({
        url: "/carpeta/edit_control",
        method:'POST',
        dataType: 'json',
        data:{id_control:id_control, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_control').val(this.empresa_id);
                $('#carpetaid_control').val(this.carpeta_id);
                $('#id_control').val(id_control);
                $('#no19').val(this.no19);
                if(this.no20 == "Si"){
                    $('#no20_si').attr('checked', true);
                }else if(this.no20 == "No"){
                    $('#no20_no').attr('checked', true);
                }else{
                    $('#no20_si').attr('checked', false);
                    $('#no20_no').attr('checked', false);
                }
                if(this.no21 == "Si"){
                    $('#no21_si').attr('checked', true);
                }else if(this.no21 == "No"){
                    $('#no21_no').attr('checked', true);
                }else{
                    $('#no21_si').attr('checked', false);
                    $('#no21_no').attr('checked', false);
                }
                if(this.no22 == "Si"){
                    $('#no22_si').attr('checked', true);
                }else if(this.no22 == "No"){
                    $('#no22_no').attr('checked', true);
                }else{
                    $('#no22_si').attr('checked', false);
                    $('#no22_no').attr('checked', false);
                }
                if(this.no23 == "Si"){
                    $('#no23_si').attr('checked', true);
                }else if(this.no23 == "No"){
                    $('#no23_no').attr('checked', true);
                }else{
                    $('#no23_si').attr('checked', false);
                    $('#no23_no').attr('checked', false);
                }
                if(this.no24 == "Si"){
                    $('#no24_si').attr('checked', true);
                }else if(this.no24 == "No"){
                    $('#no24_no').attr('checked', true);
                }else{
                    $('#no24_si').attr('checked', false);
                    $('#no24_no').attr('checked', false);
                }
                if(this.no25 == "Si"){
                    $('#no25_si').attr('checked', true);
                }else if(this.no25 == "No"){
                    $('#no25_no').attr('checked', true);
                }else{
                    $('#no25_si').attr('checked', false);
                    $('#no25_no').attr('checked', false);
                }
                if(this.no26 == "Si"){
                    $('#no26_si').attr('checked', true);
                }else if(this.no26 == "No"){
                    $('#no26_no').attr('checked', true);
                }else{
                    $('#no26_si').attr('checked', false);
                    $('#no26_no').attr('checked', false);
                }
                if(this.no27 == "Si"){
                    $('#no27_si').attr('checked', true);
                }else if(this.no27 == "No"){
                    $('#no27_no').attr('checked', true);
                }else{
                    $('#no27_si').attr('checked', false);
                    $('#no27_no').attr('checked', false);
                }
                if(this.no28 == "Si"){
                    $('#no28_si').attr('checked', true);
                }else if(this.no28 == "No"){
                    $('#no28_no').attr('checked', true);
                }else{
                    $('#no28_si').attr('checked', false);
                    $('#no28_no').attr('checked', false);
                }
                if(this.no29 == "Si"){
                    $('#no29_si').attr('checked', true);
                }else if(this.no29 == "No"){
                    $('#no29_no').attr('checked', true);
                }else{
                    $('#no29_si').attr('checked', false);
                    $('#no29_no').attr('checked', false);
                }
                if(this.no30 == "Si"){
                    $('#no30_si').attr('checked', true);
                }else if(this.no30 == "No"){
                    $('#no30_no').attr('checked', true);
                }else{
                    $('#no30_si').attr('checked', false);
                    $('#no30_no').attr('checked', false);
                }
                if(this.no31 == "Si"){
                    $('#no31_si').attr('checked', true);
                }else if(this.no31 == "No"){
                    $('#no31_no').attr('checked', true);
                }else{
                    $('#no31_si').attr('checked', false);
                    $('#no31_no').attr('checked', false);
                }
                if(this.no32 == "Si"){
                    $('#no32_si').attr('checked', true);
                }else if(this.no32 == "No"){
                    $('#no32_no').attr('checked', true);
                }else{
                    $('#no32_si').attr('checked', false);
                    $('#no32_no').attr('checked', false);
                }
                if(this.no33 == "Si"){
                    $('#no33_si').attr('checked', true);
                }else if(this.no33 == "No"){
                    $('#no33_no').attr('checked', true);
                }else{
                    $('#no33_si').attr('checked', false);
                    $('#no33_no').attr('checked', false);
                }
                if(this.no34 == "Si"){
                    $('#no34_si').attr('checked', true);
                }else if(this.no34 == "No"){
                    $('#no34_no').attr('checked', true);
                }else{
                    $('#no34_si').attr('checked', false);
                    $('#no34_no').attr('checked', false);
                }
                if(this.no35 == "Si"){
                    $('#no35_si').attr('checked', true);
                }else if(this.no35 == "No"){
                    $('#no35_no').attr('checked', true);
                }else{
                    $('#no35_si').attr('checked', false);
                    $('#no35_no').attr('checked', false);
                }
                if(this.no36 == "Si"){
                    $('#no36_si').attr('checked', true);
                }else if(this.no36 == "No"){
                    $('#no36_no').attr('checked', true);
                }else{
                    $('#no36_si').attr('checked', false);
                    $('#no36_no').attr('checked', false);
                }
                $('#createControlModal').modal('toggle');
            });
        }
    });
}

function delete_control(id_control){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/carpeta/delete_control",
            method:'POST',
            type: 'post',
            data:{id_control:id_control, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La revisión fue eliminada correctamente', 'Eliminar control', {timeOut:3000});
                    list_control();
                }
            }
        });
    })
}





//MODALS TRAMITE
function list_tramite(){
    empresa_id=$('#empresa_id').val();
    carpeta_id=$('#carpeta_id').val();
    var list = $('#tbl_tramite').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/carpeta/list_tramite",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                carpeta_id:carpeta_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'nombre'},
            {"data": 'entrada'},
            {"data": 'respuesta'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_tramite').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no37=$('#no37').val();
    id=$('#carpetaid_tramite').val();
    empresa_id=$('#empresaid_tramite').val();
    if(no37!=""){
        $.ajax({
            url: "/carpeta/create_tramite",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGTramite').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createTramiteModal').modal('hide');
                    toastr.success('El trámite fue guardado correctamente', 'Guardar trámite', {timeOut:3000});
                    if(id==""){
                        //location.href=proyecto_id+"/edit";
                    }else{
                        $('#btnGTramite').show();
                        list_tramite();
                    }
                }else{
                    $('#btnGTramite').show();
                    toastr.warning('El trámite ya se encuentra dado de alta', 'Guardar trámite', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar el nombre del trámite vacío");
    }
});

function edit_tramite(id_tramite){
    $.ajax({
        url: "/carpeta/edit_tramite",
        method:'POST',
        dataType: 'json',
        data:{id_tramite:id_tramite, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_tramite').val(this.empresa_id);
                $('#carpetaid_tramite').val(this.carpeta_id);
                $('#id_tramite').val(id_tramite);
                $('#no37').val(this.no37);
                $('#no38').val(this.no38);
                $('#no40').val(this.no40);
                if(this.no39 == "Si"){
                    $('#no39_si').attr('checked', true);
                }else if(this.no39 == "No"){
                    $('#no39_no').attr('checked', true);
                }else{
                    $('#no39_si').attr('checked', false);
                    $('#no39_no').attr('checked', false);
                }
                $('#createTramiteModal').modal('toggle');
            });
        }
    });
}

function delete_tramite(id_tramite){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/carpeta/delete_tramite",
            method:'POST',
            type: 'post',
            data:{id_tramite:id_tramite, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('El trámite fue eliminado correctamente', 'Eliminar trámite', {timeOut:3000});
                    list_tramite();
                }
            }
        });
    })
}





//MODALS VERIFICACION
function list_verificacion(){
    empresa_id=$('#empresa_id').val();
    carpeta_id=$('#carpeta_id').val();
    var list = $('#tbl_verificacion').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/carpeta/list_verificacion",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                carpeta_id:carpeta_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'fecha'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_verificacion').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no41=$('#no41').val();
    id=$('#carpetaid_verificacion').val();
    empresa_id=$('#empresaid_verificacion').val();
    if(no41!=""){
        $.ajax({
            url: "/carpeta/create_verificacion",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGVerificacion').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createVerificacionModal').modal('hide');
                    toastr.success('La verificación fue guardada correctamente', 'Guardar verificación', {timeOut:3000});
                    if(id==""){
                        //location.href=proyecto_id+"/edit";
                    }else{
                        $('#btnGVerificacion').show();
                        list_verificacion();
                    }
                }else{
                    $('#btnGVerificacion').show();
                    toastr.warning('La verificación ya se encuentra dada de alta', 'Guardar verificación', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de verificación vacía");
    }
});

function edit_verificacion(id_verificacion){
    $.ajax({
        url: "/carpeta/edit_verificacion",
        method:'POST',
        dataType: 'json',
        data:{id_verificacion:id_verificacion, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_verificacion').val(this.empresa_id);
                $('#carpetaid_verificacion').val(this.carpeta_id);
                $('#id_verificacion').val(id_verificacion);
                $('#no41').val(this.no41);
                $('#no42').val(this.no42);
                $('#no43').val(this.no43);
                $('#createVerificacionModal').modal('toggle');
            });
        }
    });
}

function delete_verificacion(id_verificacion){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/carpeta/delete_verificacion",
            method:'POST',
            type: 'post',
            data:{id_verificacion:id_verificacion, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La verificación fue eliminada correctamente', 'Eliminar verificación', {timeOut:3000});
                    list_verificacion();
                }
            }
        });
    })
}





//MODALS ATENCION
function list_atencion(){
    empresa_id=$('#empresa_id').val();
    carpeta_id=$('#carpeta_id').val();
    var list = $('#tbl_atencion').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/carpeta/list_atencion",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                carpeta_id:carpeta_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'queja'},
            {"data": 'motivo'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_atencion').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no44=$('#no44').val();
    id=$('#carpetaid_atencion').val();
    empresa_id=$('#empresaid_atencion').val();
    if(no44!=""){
        $.ajax({
            url: "/carpeta/create_atencion",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGAtencion').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createAtencionModal').modal('hide');
                    toastr.success('La atención fue guardada correctamente', 'Guardar atención', {timeOut:3000});
                    if(id==""){
                        //location.href=proyecto_id+"/edit";
                    }else{
                        $('#btnGAtencion').show();
                        list_atencion();
                    }
                }else{
                    $('#btnGAtencion').show();
                    toastr.warning('La atención ya se encuentra dada de alta', 'Guardar atención', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de atención vacía");
    }
});

function edit_atencion(id_atencion){
    $.ajax({
        url: "/carpeta/edit_atencion",
        method:'POST',
        dataType: 'json',
        data:{id_atencion:id_atencion, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_atencion').val(this.empresa_id);
                $('#carpetaid_atencion').val(this.carpeta_id);
                $('#id_atencion').val(id_atencion);
                $('#no44').val(this.no44);
                $('#no45').val(this.no45);
                $('#no46').val(this.no46);
                $('#no47').val(this.no47);
                $('#no48').val(this.no48);
                $('#createAtencionModal').modal('toggle');
            });
        }
    });
}

function delete_atencion(id_atencion){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/carpeta/delete_atencion",
            method:'POST',
            type: 'post',
            data:{id_atencion:id_atencion, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La atención fue eliminada correctamente', 'Eliminar atención', {timeOut:3000});
                    list_atencion();
                }
            }
        });
    })
}


