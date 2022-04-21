$(document).ready(function() {
    $('#tbl_seguimiento').DataTable({
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


function Salir(){
    $('#confirmModal').modal('show');
 }

$('#btnCancelar').click(function(){
    window.location.href = "/seguimiento";
});

function Guardar(){
    $('#overlay').show();
    $('#formcreate_seguimiento').submit();
}

function GuardarCambios(){
    $('#overlay').show();
    $('#formedit_seguimiento').submit();
}



function CreateSeguimiento(){
    no1=$('#no1').val();
    empresa_id=$('#empresa_id').val();
    id=$('#seguimiento_id').val();
    proyecto_id=$('#proyecto_id').val();
    $('#empresaid_seguimiento').val(empresa_id);
    $('#proyectoid_seguimiento').val(proyecto_id);
    $('#id_seg').val("");
    $('#no4').val("");
    $('#no5').val("");
    if(id==""){
        if(no1!=""){
            form=$('#formcreate_seguimiento').serialize();
            $.ajax({
                url: "/seguimiento/guardar_seguimiento",
                type:'post',
                data:form,
                success:function(resp){
                    $('#seguimientoid_seguimiento').val(resp);
                    $('#seguimiento_id').val(resp);
                    $('#createSeguimientoModal').modal('toggle');
                }
            });
        }else{
            alert("No puede estar la fecha de propuesta vacía");
        }
    }else{
        $('#seguimientoid_seguimiento').val(id);
        $('#createSeguimientoModal').modal('toggle');
    }
}


//MODALS SEGUIMIENTO
function list_seguimiento(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    var list = $('#tbl_seguimiento').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/seguimiento/list_seguimiento",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                proyecto_id:proyecto_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'fecha'},
            {"data": 'resultado'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_seg').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no4=$('#no4').val();
    id=$('#seguimientoid_seguimiento').val();
    empresa_id=$('#empresaid_seguimiento').val();
    proyecto_id=$('#proyectoid_seguimiento').val();
    if(no4!=""){
        $.ajax({
            url: "/seguimiento/create_seguimiento",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGSeguimiento').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createSeguimientoModal').modal('hide');
                    toastr.success('El seguimiento fue guardado correctamente', 'Guardar seguimiento', {timeOut:3000});
                    if(id==""){
                        location.href=proyecto_id+"/edit";
                    }else{
                        $('#btnGSeguimiento').show();
                        list_seguimiento();
                    }
                }else{
                    $('#btnGSeguimiento').show();
                    toastr.warning('El seguimiento ya se encuentra dado de alta', 'Guardar seguimiento', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de seguimiento vacía");
    }
});

function edit_seguimiento(id_seg){
    $.ajax({
        url: "/seguimiento/edit_seguimiento",
        method:'POST',
        dataType: 'json',
        data:{id_seg:id_seg, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_seguimiento').val(this.empresa_id);
                $('#seguimientoid_seguimiento').val(this.seguimiento_id);
                $('#proyectoid_seguimiento').val(this.proyecto_id);
                $('#id_seg').val(id_seg);
                $('#no4').val(this.no4);
                $('#no5').val(this.no5);
                $('#createSeguimientoModal').modal('toggle');
            });
        }
    });
}

function delete_seguimiento(id_seg){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/seguimiento/delete_seguimiento",
            method:'POST',
            type: 'post',
            data:{id_seg:id_seg, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('El seguimiento fue eliminado correctamente', 'Eliminar seguimiento', {timeOut:3000});
                    list_seguimiento();
                }
            }
        });
    })
}


