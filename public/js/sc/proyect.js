$(document).ready(function() {
    $('#tbl_problema').DataTable({
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

$("input[name='no6']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div6").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div6").style.backgroundColor="#FFF";
    }
});

$("input[name='no7']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div7").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div7").style.backgroundColor="#FFF";
    }
});

$("input[name='no8']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div8").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div8").style.backgroundColor="#FFF";
    }
});

$("input[name='no9']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div9").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div9").style.backgroundColor="#FFF";
    }
});

$("input[name='no10']").click(function()
{     
    if($(this).val() == "Si"){
        document.getElementById("div10").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div10").style.backgroundColor="#FFF";
    }
});

$("input[name='no12']").click(function()
{     
    if($(this).val() == "Si"){
        document.getElementById("div12").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div12").style.backgroundColor="#FFF";
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

$("input[name='no26']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div26").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div26").style.backgroundColor="#FFF";
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
    if($(this).val() == "Si"){
        document.getElementById("div31").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div31").style.backgroundColor="#FFF";
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
    window.location.href = "/proyect";
});

function Guardar(){
    $('#overlay').show();
    $('#formcreate_proyect').submit();
}

function GuardarCambios(){
    $('#overlay').show();
    $('#formedit_proyect').submit();
}



function CreateProblema(){
    no1=$('#no1').val();
    empresa_id=$('#empresa_id').val();
    id=$('#proyect_id').val();
    proyecto_id=$('#proyecto_id').val();
    $('#empresaid_problema').val(empresa_id);
    $('#proyectoid_problema').val(proyecto_id);
    $('#id_problema').val("");
    $('#no32').val("");
    $('#no33').val("");
    if(id==""){
        if(no1!=""){
            form=$('#formcreate_proyect').serialize();
            $.ajax({
                url: "/proyect/guardar_proyect",
                type:'post',
                data:form,
                success:function(resp){
                    $('#proyectid_problema').val(resp);
                    $('#proyect_id').val(resp);
                    $('#createProblemaModal').modal('toggle');
                }
            });
        }else{
            alert("No puede estar la fecha de propuesta vacía");
        }
    }else{
        $('#proyectid_problema').val(id);
        $('#createProblemaModal').modal('toggle');
    }
}


//MODALS PROBLEMA
function list_problema(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    var list = $('#tbl_problema').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/proyect/list_problema",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                proyecto_id:proyecto_id,
                _token:$('input[name="_token"]').val()
            },
            
        },
        "columns": [
            {"data": 'problema'},
            {"data": 'solucion'},
            {"data": 'edit'},
            {"data": 'delete'},
        ],
        "language": espanol
    });
}

$('#formcreate_problema').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no32=$('#no32').val();
    id=$('#proyectid_problema').val();
    empresa_id=$('#empresaid_problema').val();
    proyecto_id=$('#proyectoid_problema').val();
    if(no32!=""){
        $.ajax({
            url: "/proyect/create_problema",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGProblema').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createProblemaModal').modal('hide');
                    toastr.success('El problema fue guardado correctamente', 'Guardar problema', {timeOut:3000});
                    if(id==""){
                        location.href=proyecto_id+"/edit";
                    }else{
                        $('#btnGProblema').show();
                        list_problema();
                    }
                }else{
                    $('#btnGProblema').show();
                    toastr.warning('El problema ya se encuentra dado de alta', 'Guardar problema', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar el problema vacío");
    }
});

function edit_problema(id_prob){
    $.ajax({
        url: "/proyect/edit_problema",
        method:'POST',
        dataType: 'json',
        data:{id_prob:id_prob, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_problema').val(this.empresa_id);
                $('#proyectid_problema').val(this.proyect_id);
                $('#proyectoid_problema').val(this.proyecto_id);
                $('#id_problema').val(id_prob);
                $('#no32').val(this.no32);
                $('#no33').val(this.no33);
                $('#createProblemaModal').modal('toggle');
            });
        }
    });
}

function delete_problema(id_prob){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/proyect/delete_problema",
            method:'POST',
            type: 'post',
            data:{id_prob:id_prob, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('El problema fue eliminado correctamente', 'Eliminar problema', {timeOut:3000});
                    list_problema();
                }
            }
        });
    })
}


