$(document).ready(function() {
    $('#tbl_revision').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    $('#tbl_cadena').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    list_revision();
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


function Salir(){
    $('#confirmModal').modal('show');
 }

$('#btnCancelar').click(function(){
    window.location.href = "/seguridad";
});



function CreateRevision(){
    empresa_id=$('#empresa_id').val();
    $('#empresaid_revision').val(empresa_id);
    $('#id_revision').val("");
    $('#no1').val("");
    $('#no7').val("");
    $('#no9').val("");
    $('#no2_si').attr('checked', false);
    $('#no2_no').attr('checked', false);
    $('#no3_si').attr('checked', false);
    $('#no3_no').attr('checked', false);
    $('#no4_si').attr('checked', false);
    $('#no4_no').attr('checked', false);
    $('#no5_si').attr('checked', false);
    $('#no5_no').attr('checked', false);
    $('#no6_si').attr('checked', false);
    $('#no6_no').attr('checked', false);
    $('#no8_si').attr('checked', false);
    $('#no8_no').attr('checked', false);
    $('#no10_si').attr('checked', false);
    $('#no10_no').attr('checked', false);
    $('#createRevisionModal').modal('toggle');
}


function CreateCadena(){
    empresa_id=$('#empresa_id').val();
    $('#empresaid_cadena').val(empresa_id);
    $('#id_cadena').val("");
    $('#no11').val("");
    $('#no13').val("");
    $('#no12_si').attr('checked', false);
    $('#no12_no').attr('checked', false);
    $('#createCadenaModal').modal('toggle');
}




//MODALS REVISION
function list_revision(){
    empresa_id=$('#empresa_id').val();
    var list = $('#tbl_revision').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/seguridad/list_revision",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
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

$('#formcreate_revision').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no1=$('#no1').val();
    empresa_id=$('#empresaid_revision').val();
    if(no1!=""){
        $.ajax({
            url: "/seguridad/create_revision",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGRevision').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createRevisionModal').modal('hide');
                    toastr.success('La revisión fue guardada correctamente', 'Guardar revisión', {timeOut:3000});
                    $('#btnGRevision').show();
                    list_revision();
                }else{
                    $('#btnGRevision').show();
                    toastr.warning('La revisión ya se encuentra dada de alta', 'Guardar revisión', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de revisión vacía");
    }
});

function edit_revision(id_revision){
    $.ajax({
        url: "/seguridad/edit_revision",
        method:'POST',
        dataType: 'json',
        data:{id_revision:id_revision, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_revision').val(this.empresa_id);
                $('#id_revision').val(id_revision);
                $('#no1').val(this.no1);
                $('#no7').val(this.no7);
                $('#no9').val(this.no9);
                if(this.no2 == "Si"){
                    $('#no2_si').attr('checked', true);
                }else if(this.no2 == "No"){
                    $('#no2_no').attr('checked', true);
                }else{
                    $('#no2_si').attr('checked', false);
                    $('#no2_no').attr('checked', false);
                }
                if(this.no3 == "Si"){
                    $('#no3_si').attr('checked', true);
                }else if(this.no3 == "No"){
                    $('#no3_no').attr('checked', true);
                }else{
                    $('#no3_si').attr('checked', false);
                    $('#no3_no').attr('checked', false);
                }
                if(this.no4 == "Si"){
                    $('#no4_si').attr('checked', true);
                }else if(this.no4 == "No"){
                    $('#no4_no').attr('checked', true);
                }else{
                    $('#no4_si').attr('checked', false);
                    $('#no4_no').attr('checked', false);
                }
                if(this.no5 == "Si"){
                    $('#no5_si').attr('checked', true);
                }else if(this.no5 == "No"){
                    $('#no5_no').attr('checked', true);
                }else{
                    $('#no5_si').attr('checked', false);
                    $('#no5_no').attr('checked', false);
                }
                if(this.no6 == "Si"){
                    $('#no6_si').attr('checked', true);
                }else if(this.no6 == "No"){
                    $('#no6_no').attr('checked', true);
                }else{
                    $('#no6_si').attr('checked', false);
                    $('#no6_no').attr('checked', false);
                }
                if(this.no8 == "Si"){
                    $('#no8_si').attr('checked', true);
                }else if(this.no8 == "No"){
                    $('#no8_no').attr('checked', true);
                }else{
                    $('#no8_si').attr('checked', false);
                    $('#no8_no').attr('checked', false);
                }
                if(this.no10 == "Si"){
                    $('#no10_si').attr('checked', true);
                }else if(this.no10 == "No"){
                    $('#no10_no').attr('checked', true);
                }else{
                    $('#no10_si').attr('checked', false);
                    $('#no10_no').attr('checked', false);
                }
                $('#createRevisionModal').modal('toggle');
            });
        }
    });
}

function delete_revision(id_revision){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/seguridad/delete_revision",
            method:'POST',
            type: 'post',
            data:{id_revision:id_revision, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La revisión fue eliminada correctamente', 'Eliminar revisión', {timeOut:3000});
                    list_revision();
                }
            }
        });
    })
}




//MODALS CADENA
function list_cadena(){
    empresa_id=$('#empresa_id').val();
    var list = $('#tbl_cadena').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/seguridad/list_cadena",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'fecha'},
            {"data": 'responsable'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_cadena').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no11=$('#no11').val();
    empresa_id=$('#empresaid_cadena').val();
    if(no11!=""){
        $.ajax({
            url: "/seguridad/create_cadena",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGCadena').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createCadenaModal').modal('hide');
                    toastr.success('La cadena fue guardada correctamente', 'Guardar cadena de frío', {timeOut:3000});
                    $('#btnGCadena').show();
                    list_cadena();
                }else{
                    $('#btnGCadena').show();
                    toastr.warning('La cadena ya se encuentra dada de alta', 'Guardar cadena de frío', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha en que se monto la cadena vacía");
    }
});

function edit_cadena(id_cadena){
    $.ajax({
        url: "/seguridad/edit_cadena",
        method:'POST',
        dataType: 'json',
        data:{id_cadena:id_cadena, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_cadena').val(this.empresa_id);
                $('#id_cadena').val(id_cadena);
                $('#no11').val(this.no11);
                $('#no13').val(this.no13);
                if(this.no12 == "Si"){
                    $('#no12_si').attr('checked', true);
                }else if(this.no12 == "No"){
                    $('#no12_no').attr('checked', true);
                }else{
                    $('#no12_si').attr('checked', false);
                    $('#no12_no').attr('checked', false);
                }
                $('#createCadenaModal').modal('toggle');
            });
        }
    });
}

function delete_cadena(id_cadena){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/seguridad/delete_cadena",
            method:'POST',
            type: 'post',
            data:{id_cadena:id_cadena, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La cadenaa fue eliminada correctamente', 'Eliminar cadena de frío', {timeOut:3000});
                    list_cadena();
                }
            }
        });
    })
}

