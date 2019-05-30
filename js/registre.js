$(document).ready(inici);

jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
function inici() {
     $("#formulariR").validate({
        focusCleanup: true,
        rules: {
            nombre: {
                required: true,
                minlength: 3
            },
            apellido: {
                required: true,
                minlength: 4
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confpass: {
                required: true,
                equalTo: "#password"
            },
            check: {
                required: true
            }
        },
        messages: {
            nombre: {
                required: "<b>campo obligatorio</b>",
                minlength: "mínimo 3 letras"
            },
            apellido: {
                required: "<b>campo obligatorio</b>",
                minlength: "mínimo 4 letras"
            },
            email: {
                required: "<b>campo obligatorio</b>",
                email: "Por favor introduzca un email válido"
            },
            password: {
                required: "<b>campo obligatorio</b>",
                minlength: "mínimo 5 letras"
            },
            confpass: {
                required: "<b>campo obligatorio</b>",
                equalTo: "ambas contraseñas deben coincidir"
            },
            check: {
                required: "<b>campo obligatorio</b>"
            }
        }
    });
}

