

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

$("input[name='no8']").click(function()
{     
    if($(this).val() == "No"){
        document.getElementById("div8").style.backgroundColor="#FF4040";
    }else{
        document.getElementById("div8").style.backgroundColor="#FFF";
    }
});


function Salir(){
    $('#confirmModal').modal('show');
 }

$('#btnCancelar').click(function(){
    window.location.href = "/factibilidad";
});

function Guardar(){
    $('#overlay').show();
    $('#formcreate_factibilidad').submit();
}

function GuardarCambios(){
    $('#overlay').show();
    $('#formedit_factibilidad').submit();
}

