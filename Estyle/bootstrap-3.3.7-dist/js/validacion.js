$("span.help-block").hide();
function validarN(campo, mensaje1, mensaje2, cantidad1, cantidad2, mensaje3) {

    number = document.getElementById(campo).value;
    if (number == null || number.length == 0) {
        $("#id" + campo).remove();
        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#' + campo).parent().children('span').text(mensaje1).show();
        $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    } else {
        if (isNaN(number)) {
            $("#id" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text(mensaje2).show();
            $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            if (number.length < cantidad1 || number.length > cantidad2) {
                $('#id' + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
                $('#' + campo).parent().children('span').text(mensaje3).show();
                $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                return false;
            } else {
                $("#id" + campo).remove();
                $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
                $('#' + campo).parent().children('span').hide();
                $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                return true;
            }
        }
    }
}

function validarText(campo, mensaje1, mensaje2) {

    text = document.getElementById(campo).value;
    t = /^[a-zA-Z ]*$/;
    if (text == null || text.length == 0) {

        $("#id" + campo).remove();
        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#' + campo).parent().children('span').text(mensaje1).show();
        $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    }
    else {
        if (!t.test(text)) {
            $("#id" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text(mensaje2).show();
            $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $("#id" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#' + campo).parent().children('span').hide();
            $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }
    }
}

function tamaño(campo, mensaje1, mensaje2) {

    valor = document.getElementById(campo).value;
    if (valor.length == 0 || valor.length == null) {
        $("#id" + campo).remove();
        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#' + campo).parent().children('span').text(mensaje1).show();
        $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    } else {
        if (valor.length <= 8) {
            $("#id" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo).parent().children('span').text(mensaje2).show();
            $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $("#id" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#' + campo).parent().children('span').hide();
            $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }
    }
}

function tamaño1(campo, mensaje1) {

    valor = document.getElementById(campo).value;
    if (valor.length > 0 && valor.length <= 8) {
        $("#id" + campo).remove();
        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#' + campo).parent().children('span').text(mensaje1).show();
        $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    } else {
        if (valor.length == 0 || valor.length == null) {
            $("#id" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#' + campo).parent().children('span').hide();
            $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return false;
        } else {
            $("#id" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#' + campo).parent().children('span').hide();
            $('#' + campo).parent().append("<span id='id" + campo + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }
    }
}

function validarPass(campo1, campo2, mensaje1, mensaje2) {

    valor1 = document.getElementById(campo1).value;
    valor2 = document.getElementById(campo2).value;

    if (valor1.length == 0 || valor1.length == null) {
        $("#id" + campo1).remove();
        $('#' + campo1).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#' + campo1).parent().children('span').text(mensaje1).show();
        $('#' + campo1).parent().append("<span id='id" + campo1 + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    } else {
        if (valor1 != valor2) {
            $("#id" + campo1).remove();
            $('#' + campo1).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo1).parent().children('span').text(mensaje2).show();
            $('#' + campo1).parent().append("<span id='id" + campo1 + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $("#id" + campo1).remove();
            $('#' + campo1).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#' + campo1).parent().children('span').hide();
            $('#' + campo1).parent().append("<span id='id" + campo1 + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }
    }
}

function validarPass1(campo1, campo2, mensaje1, mensaje2) {

    valor1 = document.getElementById(campo1).value;
    valor2 = document.getElementById(campo2).value;

    if (valor2.length > 0 && valor2.length <= 8) {
        $("#id" + campo1).remove();
        $('#' + campo1).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#' + campo1).parent().children('span').text(mensaje1).show();
        $('#' + campo1).parent().append("<span id='id" + campo1 + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    } else {
        if (valor1 != valor2) {
            $("#id" + campo1).remove();
            $('#' + campo1).parent().parent().attr("class", "form-group has-error has-feedback");
            $('#' + campo1).parent().children('span').text(mensaje2).show();
            $('#' + campo1).parent().append("<span id='id" + campo1 + "' class='glyphicon glyphicon-remove form-control-feedback'></span>");
            return false;
        } else {
            $("#id" + campo1).remove();
            $('#' + campo1).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#' + campo1).parent().children('span').hide();
            $('#' + campo1).parent().append("<span id='id" + campo1 + "' class='glyphicon glyphicon-ok form-control-feedback'></span>");
            return true;
        }
    }
}

function validarCB(campo, mensaje) {

    selec = document.getElementById(campo).selectedIndex;
    text = "Seleccione Una Opcion...";

    if (selec == 0 || selec == null) {
        $("#id" + campo).remove();
        $('#' + campo).parent().parent().attr("class", "form-group has-error has-feedback");
        $('#' + campo).parent().children('span').text(mensaje).show();
        $('#' + campo).parent().append("<span id='id" + campo + "' class='form-control-feedback'></span>");
        return false;
    } else {
        if (selec != 0 || selec != null) {
            $("#id" + campo).remove();
            $('#' + campo).parent().parent().attr("class", "form-group has-success has-feedback");
            $('#' + campo).parent().children('span').hide();
            $('#' + campo).parent().append("<span id='id" + campo + "' class='form-control-feedback'></span>");
            return true;
        }

    }
}