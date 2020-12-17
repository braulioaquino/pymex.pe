$(function() {
    var expr1 = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var expr2 = /^[0-9]+$/;
    // registro del detalle de idiomas
    $('#guardarUsuarios').on('click', function() {
        var dni = $('#textNumero').val();
        var nombre = $('#textNombre').val();
        var apellido = $('#textApellido').val();
        var email = $('#textEmail').val();
        var pass = $('#textContrasena').val();
        var tipo = $('#cboTipo').val();
        var celular = $('#textTelefono').val();
        var localidad = $('#textLocalidad').val();
        var tipousuario = $('#cboTipoUsuario').val();

       if (dni == "") {
            $(".inputs").css({
                "border": "",
            });
            $(".c-label").css({
                "color": "",
            });
            $("input#textNumero").focus();
            sweetAlert("Oops...", "Digite el numero de DNI", "warning");
            $("#textNumero").css({
                "border": "solid 1px #a8272d",
            });
            return false;
        } else if (nombre == "") {
            $(".inputs").css({
                "border": "",
            });
            $(".c-label").css({
                "color": "",
            });
            $("input#textNombre").focus();
            sweetAlert("Oops...", "Digite el nombre", "warning");
            $("#textNombre").css({
                "border": "solid 1px #a8272d",
            });
            return false;
        } else if (apellido == "") {
            $(".inputs").css({
                "border": "",
            });
            $(".c-label").css({
                "color": "",
            });
            $("input#textApellido").focus();
            sweetAlert("Oops...", "Digite el Apellido", "warning");
            $("#textApellido").css({
                "border": "solid 1px #a8272d",
            });
            return false;
        } else if (email == "") {
            $(".inputs").css({
                "border": "",
            });
            $(".c-label").css({
                "color": "",
            });
            $("input#textEmail").focus();
            sweetAlert("Oops...", "Digite el Email", "warning");
            $("#textEmail").css({
                "border": "solid 1px #a8272d",
            });
            return false;
        } else if (pass == "") {
            $(".inputs").css({
                "border": "",
            });
            $(".c-label").css({
                "color": "",
            });
            $("input#textContrasena").focus();
            sweetAlert("Oops...", "Digite la contraseña", "warning");
            $("#textContrasena").css({
                "border": "solid 1px #a8272d",
            });
            return false;
        } else if (tipo == "") {
            $(".inputs").css({
                "border": "",
            });
            $(".c-label").css({
                "color": "",
            });
            $("select#cboTipo").focus();
            sweetAlert("Oops...", "Seleccione un tipo", "warning");
            $("#cboTipo").css({
                "border": "solid 1px #a8272d",
            });
            return false;
        } else if (celular == "") {
            $(".inputs").css({
                "border": "",
            });
            $(".c-label").css({
                "color": "",
            });
            $("input#textTelefono").focus();
            sweetAlert("Oops...", "Digite el numero de celular", "warning");
            $("#textTelefono").css({
                "border": "solid 1px #a8272d",
            });
            return false;
        } else if (localidad == "") {
            $(".inputs").css({
                "border": "",
            });
            $(".c-label").css({
                "color": "",
            });
            $("input#textLocalidad").focus();
            sweetAlert("Oops...", "Digite la localidad", "warning");
            $("#textLocalidad").css({
                "border": "solid 1px #a8272d",
            });
            return false;
        } else if (tipousuario == "") {
            $(".inputs").css({
                "border": "",
            });
            $(".c-label").css({
                "color": "",
            });
            $("select#cboTipoUsuario").focus();
            sweetAlert("Oops...", "Seleccione el tipo de usuario", "warning");
            $("#cboTipoUsuario").css({
                "border": "solid 1px #a8272d",
            });
            return false;
        }  else {
            form.submit();
        }
    });
 
});