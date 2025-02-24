document.getElementById("form").addEventListener("submit", function (e) {
    e.preventDefault(); // Evita el envío por defecto

    let nombre = document.getElementById("nombre").value.trim();
    let cuenta = document.getElementById("cuenta").value.trim();
    let correo = document.getElementById("correo").value.trim();
    let telefono = document.getElementById("telefono").value.trim();
    let carrera = document.getElementById("carrera").value.trim();
    let generacion = document.getElementById("generacion").value.trim();
    let direccion = document.getElementById("direccion").value.trim();
    let usuario = document.getElementById("usuario").value.trim();
    let contraseña = document.getElementById("contraseña").value.trim();
    let genero = document.querySelector('input[name="genero"]:checked');

    let warnings = document.getElementById("warnings");
    warnings.innerHTML = "";
    let errores = "";

    // Validaciones con Expresiones Regulares
    let regexNombre = /^[A-Za-zÁÉÍÓÚáéíóúÑñ ]+$/;
    let regexCuenta = /^\d{9}$/;
    let regexCorreo = /^[^@\s]+@[^@\s]+\.com$/;
    let regexTelefono = /^[0-9]{2}\s[0-9]{4}\s[0-9]{4}$/;
    let regexGeneracion = /^(200[0-9]|201[0-9]|202[0-5])$/;
    let regexUsuario = /^[a-zA-Z0-9]{10}$/;
    let regexContraseña = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.?]).{8,10}$/;

    if (!regexNombre.test(nombre)) errores += "El nombre es inválido. <br>";
    if (!regexCuenta.test(cuenta)) errores += "El número de cuenta debe tener 9 dígitos. <br>";
    if (!regexCorreo.test(correo)) errores += "Correo inválido. <br>";
    if (!regexTelefono.test(telefono)) errores += "El teléfono debe tener formato 55 2851 1138. <br>";
    if (!regexGeneracion.test(generacion)) errores += "Generación inválida. <br>";
    if (!regexUsuario.test(usuario)) errores += "Usuario inválido. <br>";
    if (!regexContraseña.test(contraseña)) errores += "Contraseña insegura. <br>";
    if (!genero) errores += "Selecciona un género. <br>";

    if (errores) {
        warnings.innerHTML = errores;
    } else {
        let ficha = `
        Nombre: ${nombre}
        Número de Cuenta: ${cuenta}
        Correo: ${correo}
        Teléfono: ${telefono}
        Carrera: ${carrera}
        Generación: ${generacion}
        Dirección: ${direccion}
        Género: ${genero.value}
        Usuario: ${usuario}
        `;
        alert("Ficha de Registro:\n\n" + ficha);
        this.reset();
    }
});
