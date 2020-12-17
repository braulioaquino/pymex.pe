$(function() {
    load2(1);
});

function load2(page) {
    var query = $("#q2").val();
    var per_page = 20;
    var id_persona = $("#txtcodigoUnicoUsuario").val();
    var parametros = {
        "action": "ajax",
        "page": page,
        'query': query,
        'per_page': per_page,
        'id_persona': id_persona
    };
    $("#loader2").fadeIn('slow');
    $.ajax({
        url: 'ajax/listar_jobs.php',
        data: parametros,
        beforeSend: function(objeto) {
            $("#loader2").html("Cargando...");
        },
        success: function(data) {
            $(".outer_div2").html(data).fadeIn('slow');
            $("#loader2").html("");
        }
    })
}
// funcion para añadir registros
$("#add_Jobs").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "ajax/guardar_Jobs.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#resultados2").html("Enviando...");
        },
        success: function(datos) {
            $("#resultados2").html(datos);
            load2(1);
            $('#add_Jobs_Modal').modal('hide');
            
            $('#textTitulo').val("");
            $('#TextPrecio').val("");
            $('#TextDuracion').val("");
            $('#cboTipo').val("");
            $('#cboModalidad').val("");
            $('#cboAuthor').val("");
            //$('#cboUbicacion').val("");
            $('#cboCategoria').val("");
            $('#txtDescripcion').val("");  

            $('#cboRegion').val("");
            $('#cboProvincia').val("");
            $('#cboCiudad').val("");
            $('#cboEstado').val("");  
            $('#txtRandon').val("");  
            $('#textNombreInstitucion').val("");
        }
    });
    event.preventDefault();
});
// funcion para llevar los datos al modal editar
$('#edit_Jobs_Modal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal

    var idjobs = button.data('id')
    var duracion = button.data('duracion')
    var phone = button.data('phone')
    var location = button.data('location')
    var nombre = button.data('nombre')
    var inst_name = button.data('inst_name')
    var modality_name = button.data('modality_name')
    var type_course = button.data('type_course')
    var categoria = button.data('categoria')
    //var ubicacion = button.data('ubicacion')
    var estado = button.data('estado')
    var departamento = button.data('departamento')
    var provincia = button.data('provincia')
    var ciudad = button.data('ciudad')
    
    $('#txtIdJobs').val(idjobs)
    $('#textTitulo2').val(nombre)
    $('#TextPrecio2').val(phone)
    $('#TextDuracion2').val(duracion)
    $('#cboTipo2').val(type_course)

    $('#cboModalidad2').val(modality_name)
    $('#cboAuthor2').val(inst_name)
    $('#txtDescripcion2').val(location)
    $('#cboCategoria2').val(categoria)  
    $('#cboEstado2').val(estado)  
    $('#cboRegion2').val(departamento)  
    $('#cboProvincia2').val(provincia)  
    $('#cboCiudad2').val(ciudad)  

   
    
});
// funcion para editar los datos del registro 
$("#edit_Jobs").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "ajax/editar_Jobs.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#resultados2").html("Enviando...");
        },
        success: function(datos) {
            $("#resultados2").html(datos);
            load2(1);
            $('#edit_Jobs_Modal').modal('hide');
        }
    });
    event.preventDefault();
});
// funcion para llevar el id al modal
$('#delete_Jobs_Modal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id')
    $('#delete_id3').val(id)
});
// funcion para elimar el registro
$("#delete_Jobs").submit(function(event) {
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "ajax/eliminar_jobs.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#resultados3").html("Enviando...");
        },
        success: function(datos) {
            $("#resultados3").html(datos);
            load2(1);
            $('#delete_Jobs_Modal').modal('hide');
        }
    });
    event.preventDefault();
});