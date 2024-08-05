function validarFormulario(data) {
    // Validación para el campo email
    if (typeof data.responseJSON.errors.email !== 'undefined') {
        document.getElementById("campoEmail").classList.add("is-invalid");
        document.getElementById("campoEmail").classList.remove("is-valid");
        document.getElementById("inputValidacionEmail").innerHTML = data.responseJSON.errors.email;
    } else {
        document.getElementById("campoEmail").classList.remove("is-invalid");
        document.getElementById("campoEmail").classList.add("is-valid");
        document.getElementById("inputValidacionEmail").innerHTML = "";
    }

    // Validación para el campo clave
    if (typeof data.responseJSON.errors.password !== 'undefined') {
        document.getElementById("campoClave").classList.add("is-invalid");
        document.getElementById("campoClave").classList.remove("is-valid");
        document.getElementById("inputValidacionPassword").innerHTML = data.responseJSON.errors.password;
    } else {
        document.getElementById("campoClave").classList.remove("is-invalid");
        document.getElementById("campoClave").classList.add("is-valid");
        document.getElementById("inputValidacionPassword").innerHTML = "";
    }
}
