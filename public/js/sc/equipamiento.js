$(document).ready(function() {
    $('#tbl_equipamiento').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "language": espanol
    });

    list_equipamiento();
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

$("input[name='no3']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div3").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div3").style.backgroundColor="#FFF";
    }
});

$("input[name='no4']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div4").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div4").style.backgroundColor="#FFF";
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
    if($(this).val() == "No"){
        document.getElementById("div10").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div10").style.backgroundColor="#FFF";
    }
});

$("input[name='no11']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div11").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div11").style.backgroundColor="#FFF";
    }
});

$("input[name='no12']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div12").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div12").style.backgroundColor="#FFF";
    }
});

$("input[name='no13']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div13").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div13").style.backgroundColor="#FFF";
    }
});

$("input[name='no14']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div14").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div14").style.backgroundColor="#FFF";
    }
});

$("input[name='no15']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div15").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div15").style.backgroundColor="#FFF";
    }
});

$("input[name='no16']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div16").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div16").style.backgroundColor="#FFF";
    }
});

$("input[name='no17']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div17").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div17").style.backgroundColor="#FFF";
    }
});

$("input[name='no18']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div18").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div18").style.backgroundColor="#FFF";
    }
});

$("input[name='no19']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div19").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div19").style.backgroundColor="#FFF";
    }
});

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


function Salir(){
    window.location.href = "/equipamiento";
 }

$('#btnCancelar').click(function(){
    window.location.href = "/equipamiento";
});

function Guardar(){
    $('#overlay').show();
    $('#formcreate_equipamiento').submit();
}

function GuardarCambios(){
    $('#overlay').show();
    $('#formedit_equipamiento').submit();
}



function CreateEquipamiento(){
    no1=$('#no1').val();
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    $('#empresaid_equipamiento').val(empresa_id);
    $('#proyectoid_equipamiento').val(proyecto_id);
    $('#id_equipamiento').val("");
    $('#no1').val("");
    for(a=2; a<=22; a++){
        $('#no'+a+'_si').attr('checked', false);
        $('#no'+a+'_no').attr('checked', false);
    }
    $('#createEquipamientoModal').modal('toggle');
}




//MODALS EQUIPAMIENTO
function list_equipamiento(){
    empresa_id=$('#empresa_id').val();
    proyecto_id=$('#proyecto_id').val();
    var list = $('#tbl_equipamiento').DataTable({
        dom: 'T<"clear">lfrtip',
        "processing": true,
        "serverSide": true,
        destroy: true,
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "Todos"]],
        "ajax":{
            "url": "/equipamiento/list_equipamiento",
            "method": "POST",
            "data": {
                empresa_id:empresa_id,
                proyecto_id:proyecto_id,
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

$('#formcreate_equipamiento').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    formData.append('_token', $('input[name=_token]').val());
    no1=$('#no1').val();
    empresa_id=$('#empresaid_equipamiento').val();
    proyecto_id=$('#proyectoid_equipamiento').val();
    if(no1!=""){
        $.ajax({
            url: "/equipamiento/create_equipamiento",
            type:'post',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                $('#btnGEquipamiento').hide();
            },
            success:function(resp){
                if(resp == "guardado"){
                    $('#createEquipamientoModal').modal('hide');
                    toastr.success('Los materiales fueron guardados correctamente', 'Guardar equipamiento', {timeOut:3000});
                    $('#btnGEquipamiento').show();
                    list_equipamiento();
                }else{
                    $('#btnGEquipamiento').show();
                    toastr.warning('La fecha de revisión ya se encuentra dada de alta', 'Guardar equipamiento', {timeOut:3000});
                }
            }
        });
    }else{
        alert("No puede estar la fecha de revisión vacía");
    }
});

function edit_equipamiento(id_equipamiento){
    $.ajax({
        url: "/equipamiento/edit_equipamiento",
        method:'POST',
        dataType: 'json',
        data:{id_equipamiento:id_equipamiento, _token:$('input[name="_token"]').val()},
        success:function(data){
            var posts = JSON.parse(data);
            $.each(posts, function() {
                $('#empresaid_equipamiento').val(this.empresa_id);
                $('#proyectoid_equipamiento').val(this.proyecto_id);
                $('#id_equipamiento').val(id_equipamiento);
                $('#no1').val(this.no1);
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
                if(this.no7 == "Si"){
                    $('#no7_si').attr('checked', true);
                }else if(this.no7 == "No"){
                    $('#no7_no').attr('checked', true);
                }else{
                    $('#no7_si').attr('checked', false);
                    $('#no7_no').attr('checked', false);
                }
                if(this.no8 == "Si"){
                    $('#no8_si').attr('checked', true);
                }else if(this.no8 == "No"){
                    $('#no8_no').attr('checked', true);
                }else{
                    $('#no8_si').attr('checked', false);
                    $('#no8_no').attr('checked', false);
                }
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
                if(this.no15 == "Si"){
                    $('#no15_si').attr('checked', true);
                }else if(this.no15 == "No"){
                    $('#no15_no').attr('checked', true);
                }else{
                    $('#no15_si').attr('checked', false);
                    $('#no15_no').attr('checked', false);
                }
                if(this.no16 == "Si"){
                    $('#no16_si').attr('checked', true);
                }else if(this.no16 == "No"){
                    $('#no16_no').attr('checked', true);
                }else{
                    $('#no16_si').attr('checked', false);
                    $('#no16_no').attr('checked', false);
                }
                if(this.no17 == "Si"){
                    $('#no17_si').attr('checked', true);
                }else if(this.no17 == "No"){
                    $('#no17_no').attr('checked', true);
                }else{
                    $('#no17_si').attr('checked', false);
                    $('#no17_no').attr('checked', false);
                }
                if(this.no18 == "Si"){
                    $('#no18_si').attr('checked', true);
                }else if(this.no18 == "No"){
                    $('#no18_no').attr('checked', true);
                }else{
                    $('#no18_si').attr('checked', false);
                    $('#no18_no').attr('checked', false);
                }
                if(this.no19 == "Si"){
                    $('#no19_si').attr('checked', true);
                }else if(this.no19 == "No"){
                    $('#no19_no').attr('checked', true);
                }else{
                    $('#no19_si').attr('checked', false);
                    $('#no19_no').attr('checked', false);
                }
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
                
                $('#createEquipamientoModal').modal('toggle');
            });
        }
    });
}

function delete_equipamiento(id_equipamiento){
    $('#deleteModal').modal('show');
    $('#btnEliminarRegistro').click(function(){
        $.ajax({
            url: "/equipamiento/delete_equipamiento",
            method:'POST',
            type: 'post',
            data:{id_equipamiento:id_equipamiento, _token:$('input[name="_token"]').val()},
            success:function(resp){
                if(resp == "eliminado"){
                    toastr.success('La revisión fue eliminada correctamente', 'Eliminar equipamiento', {timeOut:3000});
                    list_equipamiento();
                }
            }
        });
    })
}

